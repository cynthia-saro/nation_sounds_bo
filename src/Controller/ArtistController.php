<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Form\ArtistType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artists", name="artists")
     */
    public function artists()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist');

        $artists=$repository->findAll();

        return $this->render('artist/list-artist.html.twig', [
            'artists' => $artists,
        ]);
    }

    /**
     * @Route("/artiste/detail/{id}",name="artist")
     */
    public function artist(int $id)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist')
        ;

        if(!empty($id)){
            $artist=$repository->find($id);

            return $this->render('artist/artist.html.twig', [
                'artist' => $artist
            ]);
        }else{
            return $this->redirectToRoute('artists');
        }
    }

    /**
     * @Route("/artiste/modifier/{id}",name="update_artist")
     */
    public function update_artist(int $id,Request $request, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist')
        ;

        if(!empty($id)){
            $artist=$repository->find($id);

            $artistform=$this->createForm(ArtistType::class,$artist);

            if($artist){
                $artistform->handleRequest($request);
            
                if($artistform->isSubmitted() && $artistform->isValid()){
                    $data=$artistform->getData();
                    $manager->persist($data);
                    $manager->flush();

                    //redirection sur la page détail du projet ajouté
                    return $this->redirectToRoute('artist',array('id'=>$artist->getId()));
                }

                return $this->render('artist/update_artist.html.twig', [
                    'artistform' => $artistform->createView(),
                    'artist' => $artist
                ]);
            }
        }
        return $this->redirectToRoute('artists');
    }

    /**
     * @Route("/artiste/supprimer/{id}",name="delete_artist")
     */
    public function delete_artist(int $id, EntityManagerInterface $manager){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('App:Artist')
        ;

        if(!empty($id)){
            $artist=$repository->find($id);

            if($artist){
                $manager->remove($artist);
                $manager->flush();
            }

        }
        return $this->redirectToRoute('artists');
    }
    
     /**
     * @Route("new/artists", name="new_artist")
     */
    public function new_artist(Request $request, EntityManagerInterface $manager)
    { $artist=new Artist();

        $artistform=$this->createForm(ArtistType::class,$artist);
        
        $artistform->handleRequest($request);
        
        if($artistform->isSubmitted() && $artistform->isValid()){
            $manager->persist($artist);
            $manager->flush();

            //redirection sur la page détail du projet ajouté
            return $this->redirectToRoute('artist',array('id'=>$artist->getId()));
        }

        return $this->render('artist/new_artist.html.twig',[
            'artistform'=>$artistform->createView()
        ]);
    }
}
