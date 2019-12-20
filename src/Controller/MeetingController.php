<?php

namespace App\Controller;

use App\Entity\Meeting;
use App\Form\MeetingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MeetingController extends AbstractController
{

    /**
     * @Route("/json/meetings", name="meetings_json")
     */
    public function meetings_json(){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Meeting');

        $meetings=$repository->findAllArray();

        return $this->json([
            'meetings' => $meetings,
            ],
            200,
            [
                "content-type"=>"application/json",
                'Access-Control-Allow-Origin' => '*',
            ]
        );
    }

    /**
     * @Route("/meet_artists", name="meet_artists")
     */
    public function meet_artists()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Meeting')
        ;
        
        $meet_artists=$repository->findAll();

        return $this->render('meeting/meet_artists.html.twig', [
            'meet_artists' => $meet_artists,
        ]);
    }

    /**
     * @Route("/meet_artists/detail/{id}",name="details_meet")
     */
    public function meet_artist(int $id)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Meeting')
        ;

        if(!empty($id)){
            $meet_artist=$repository->find($id);

            return $this->render('meeting/details_meet.html.twig', [
                'meet_artist' => $meet_artist
            ]);
        }else{
            return $this->redirectToRoute('meet_artists');
        }
    }

    /**
     * @Route("/meet_artists/modifier/{id}",name="update_meet_artist")
     */
    public function update_meet_artist(int $id,Request $request, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Meeting')
        ;

        if(!empty($id)){
            $meet_artist=$repository->find($id);

            $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('App:Artist')
            ;
            $nameArtist = $repository->findAll();

            $form=$this->createForm(MeetingType::class,$meet_artist, array(
                'nameArtist'=>$nameArtist
            ));

            if($meet_artist){
                $form->handleRequest($request);
            
                if($form->isSubmitted() && $form->isValid()){
                    $data=$form->getData();
                    $manager->persist($data);
                    $manager->flush();

                    //redirection sur la page détail du projet ajouté
                    return $this->redirectToRoute('details_meet',array('id'=>$meet_artist->getId()));
                }

                return $this->render('meeting/update_meet_artist.html.twig', [
                    'form' => $form->createView(),
                    'meet_artist' => $meet_artist
                ]);
            }
        }
        return $this->redirectToRoute('meet_artists');
    }

    /**
     * @Route("/meet_artists/supprimer/{id}",name="delete_meet_artist")
     */
    public function deleteMeetArtist($id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Meeting')
        ;

        // if(!empty($id)){
        $meeting=$repository->find($id);

        //     if($meet_artist) {
        //         $manager->remove($meet_artist);
        //         $manager->flush();
        //     }

        // }

        // suppr meeting
         $manager->remove($meeting);
         $manager->flush();
        return $this->redirectToRoute('meet_artists');
    }

    /**
     * @Route("/meet_artists/new",name="new_meet_artist")
     */
    public function new_meet_artist(Request $request, EntityManagerInterface $manager){
        $meet_artist=new Meeting();

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist')
        ;
        $nameArtist = $repository->findAll();

        $form=$this->createForm(MeetingType::class,$meet_artist, array(
            'nameArtist'=>$nameArtist
        ));
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($meet_artist);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('details_meet',array('id'=>$meet_artist->getId()));
        }

        return $this->render('meeting/new_meet_artist.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}