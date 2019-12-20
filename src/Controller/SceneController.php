<?php

namespace App\Controller;

use App\Entity\Scene;
use App\Form\SceneType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SceneController extends AbstractController
{

    /**
     * @Route("/json/scenes", name="scenes_json")
     */
    public function scenes_json(){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Scene');

        $scenes=$repository->findAllArray();

        return new JsonResponse($scenes);
    }

    /**
     * @Route("/scenes", name="scenes")
     */
    public function scenes()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Scene');

        $scenes=$repository->findAll();

        return $this->render('scene/list-scene.html.twig', [
            'scenes' => $scenes,
        ]);
    }

    /**
     * @Route("/scenes/delete/{id}",name="delete_scene")
     */
    public function delete_scene(int $id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Scene')
        ;

        if(!empty($id)){
            $scene=$repository->find($id);

            if($scene){
                $manager->remove($scene);
                $manager->flush();
            }

        }
        return $this->redirectToRoute('scenes');
    }
    
     /**
     * @Route("new/scene", name="new_scene")
     */
    public function new_scene(Request $request, EntityManagerInterface $manager)
    { $scene=new Scene();

        $sceneform=$this->createForm(SceneType::class,$scene);
        
        $sceneform->handleRequest($request);
        
        if($sceneform->isSubmitted() && $sceneform->isValid()){
            $manager->persist($scene);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('scenes',array('id'=>$scene->getId()));
        }

        return $this->render('scene/new_scene.html.twig',[
            'sceneform'=>$sceneform->createView()
        ]);
    }
}
