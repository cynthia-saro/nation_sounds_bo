<?php

namespace App\Controller;

use App\Entity\SecurityInfo;
use App\Form\SecurityInfoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityInfoController extends AbstractController
{
    /**
     * @Route("/securityinfos", name="securityinfos")
     */
    public function securityinfos()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:SecurityInfo');

        $securityinfos=$repository->findAll();

        return $this->render('securityinfo/list_securityinfo.html.twig', [
            'securityinfos' => $securityinfos,
        ]);
    }

    /**
     * @Route("/securityinfo/detail/{id}",name="securityinfo")
     */
    public function securityinfo(int $id)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:SecurityInfo')
        ;

        if(!empty($id)){
            $securityinfo=$repository->find($id);

            return $this->render('securityinfo/securityinfo.html.twig', [
                'securityinfo' => $securityinfo
            ]);
        }else{
            return $this->redirectToRoute('securityinfos');
        }
    }

    /**
     * @Route("/securityinfo/modifier/{id}",name="update_securityinfo")
     */
    public function update_securityinfo(int $id,Request $request, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:SecurityInfo')
        ;

        if(!empty($id)){
            $securityinfo=$repository->find($id);

            $securityinfoform=$this->createForm(SecurityInfoType::class,$securityinfo);

            if($securityinfo){
                $securityinfoform->handleRequest($request);
            
                if($securityinfoform->isSubmitted() && $securityinfoform->isValid()){
                    $data=$securityinfoform->getData();
                    $manager->persist($data);
                    $manager->flush();

                    //redirection sur la page détail du projet ajouté
                    return $this->redirectToRoute('securityinfo',array('id'=>$securityinfo->getId()));
                }

                return $this->render('securityinfo/update_securityinfo.html.twig', [
                    'securityinfoform' => $securityinfoform->createView(),
                    'securityinfo' => $securityinfo
                ]);
            }
        }
        return $this->redirectToRoute('securityinfos');
    }

    /**
     * @Route("/securityinfo/supprimer/{id}",name="delete_securityinfo")
     */
    public function delete_securityinfo(int $id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:SecurityInfo')
        ;

        if(!empty($id)){
            $securityinfo=$repository->find($id);

            if($securityinfo){
                $manager->remove($securityinfo);
                $manager->flush();
            }

        }
        return $this->redirectToRoute('securityinfos');
    }
    
     /**
     * @Route("new/securityinfos", name="new_securityinfo")
     */
    public function new_securityinfo(Request $request, EntityManagerInterface $manager)
    { $securityinfo=new SecurityInfo();

        $securityinfoform=$this->createForm(SecurityInfoType::class,$securityinfo);
        
        $securityinfoform->handleRequest($request);
        
        if($securityinfoform->isSubmitted() && $securityinfoform->isValid()){
            $manager->persist($securityinfo);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('securityinfo',array('id'=>$securityinfo->getId()));
        }

        return $this->render('securityinfo/new_securityinfo.html.twig',[
            'securityinfoform'=>$securityinfoform->createView()
        ]);
    }
}
