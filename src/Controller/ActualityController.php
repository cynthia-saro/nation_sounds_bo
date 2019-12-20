<?php

namespace App\Controller;

use App\Entity\Actuality;
use App\Form\ActualityType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActualityController extends AbstractController
{
    /**
     * @Route("/json/actualities", name="actualities_json")
     */
    public function actualities_json(){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Actuality');

        $actualities=$repository->findAllArray();

        return new JsonResponse($actualities);
    }

    /**
     * @Route("/actualities", name="actualities")
     */
    public function actualities()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Actuality');

        $actualities=$repository->findAll();

        return $this->render('actuality/list_actualities.html.twig', [
            'actualities' => $actualities,
        ]);
    }

    /**
     * @Route("/actuality/detail/{id}",name="actuality")
     */
    public function actuality(int $id)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Actuality')
        ;

        if(!empty($id)){
            $actuality=$repository->find($id);

            return $this->render('actuality/actuality.html.twig', [
                'actuality' => $actuality
            ]);
        }else{
            return $this->redirectToRoute('actualities');
        }
    }

    /**
     * @Route("/actuality/modifier/{id}",name="update_actuality")
     */
    public function update_actuality(int $id,Request $request, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Actuality')
        ;

        if(!empty($id)){
            $actuality=$repository->find($id);

            $actualityform=$this->createForm(ActualityType::class,$actuality);

            if($actuality){
                $actualityform->handleRequest($request);
            
                if($actualityform->isSubmitted() && $actualityform->isValid()){
                    $data=$actualityform->getData();
                    $manager->persist($data);
                    $manager->flush();

                    //redirection sur la page détail du projet ajouté
                    return $this->redirectToRoute('actuality',array('id'=>$actuality->getId()));
                }

                return $this->render('actuality/update_actuality.html.twig', [
                    'actualityform' => $actualityform->createView(),
                    'actuality' => $actuality
                ]);
            }
        }
        return $this->redirectToRoute('actualities');
    }

    /**
     * @Route("/actuality/supprimer/{id}",name="delete_actuality")
     */
    public function delete_actuality(int $id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Actuality')
        ;

        if(!empty($id)){
            $actuality=$repository->find($id);

            if($actuality){
                $manager->remove($actuality);
                $manager->flush();
            }

        }
        return $this->redirectToRoute('actualities');
    }
    
     /**
     * @Route("new/actualities", name="new_actuality")
     */
    public function new_actuality(Request $request, EntityManagerInterface $manager)
    { $actuality=new Actuality();

        $actualityform=$this->createForm(ActualityType::class,$actuality);
        
        $actualityform->handleRequest($request);
        
        if($actualityform->isSubmitted() && $actualityform->isValid()){
            $manager->persist($actuality);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('actuality',array('id'=>$actuality->getId()));
        }

        return $this->render('actuality/new_actuality.html.twig',[
            'actualityform'=>$actualityform->createView()
        ]);
    }
}
