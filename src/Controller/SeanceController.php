<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Form\SeanceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SeanceController extends AbstractController
{
    /**
     * @Route("/seances_artists/json", name="seances_artists_json")
     */
    public function seance_artists_json()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Seance')
        ;
        
        $seances_artists=$repository->findAll();

        return $this->json([
            'seances_artists' => $seances_artists,
        ]);
    }

    /**
     * @Route("/seances_artists", name="seances_artists")
     */
    public function seances_artists()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Seance')
        ;
        
        $seance_artists=$repository->findAll();

        return $this->render('seance/seance_artists.html.twig', [
            'seance_artists' => $seance_artists,
        ]);
    }

    /**
     * @Route("/seance_artists/detail/{id}",name="seance_details")
     */
    public function seance_details(int $id)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Seance')
        ;

        if(!empty($id)){
            $seance_details=$repository->find($id);

            return $this->render('seance/seance_details.html.twig', [
                'seance_details' => $seance_details
            ]);
        }else{
            return $this->redirectToRoute('seance_artists');
        }
    }

    /**
     * @Route("/rencontre_artiste/modifier/{id}",name="update_seance_artist")
     */
    public function update_seance_artist(int $id,Request $request, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Seance')
        ;

        if(!empty($id)){
            $seance_artist=$repository->find($id);

            $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('App:Artist')
            ;
            $nameArtist = $repository->findAll();

            $form=$this->createForm(SeanceType::class,$seance_artist, array(
                'nameArtist'=>$nameArtist
            ));

            if($seance_artist){
                $form->handleRequest($request);
            
                if($form->isSubmitted() && $form->isValid()){
                    $data=$form->getData();
                    $manager->persist($data);
                    $manager->flush();

                    //redirection sur la page détail du projet ajouté
                    return $this->redirectToRoute('seance_details',array('id'=>$seance_artist->getId()));
                }

                return $this->render('seance/update_seance_artist.html.twig', [
                    'form' => $form->createView(),
                    'seance_artist' => $seance_artist
                ]);
            }
        }
        return $this->redirectToRoute('seance_artists');
    }

    /**
     * @Route("/seances_artists/delete/{id}",name="delete_seance_artist")
     */
    public function deleteSeanceArtist($id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Seance')
        ;

        // if(!empty($id)){
        $seance=$repository->find($id);

        //     if($seance_artist) {
        //         $manager->remove($seance_artist);
        //         $manager->flush();
        //     }

        // }

        // suppr seance
         $manager->remove($seance);
         $manager->flush();
        return $this->redirectToRoute('seances_artists');
    }

    /**
     * @Route("/seance_artists/new",name="new_seance_artist")
     */
    public function new_seance_artist(Request $request, EntityManagerInterface $manager){
        $seance_artist=new Seance();

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Scene')
        ;
        $nameScene = $repository->findAll();

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist')
        ;
        $nameArtist = $repository->findAll();

        $form=$this->createForm(SeanceType::class,$seance_artist, array(
            'nameArtist'=>$nameArtist,
            'nameScene'=>$nameScene
        ));
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($seance_artist);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('seance_details',array('id'=>$seance_artist->getId()));
        }

        return $this->render('seance/new_seance_artist.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
