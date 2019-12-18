<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FestivalController extends AbstractController
{
    /**
     * @Route("/festival", name="festival")
     */
    public function festival()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('App:Festival');

        $festival=$repository->findAll();

        return $this->render('festival/index.html.twig', [
            // 'controller_name' => 'FestivalController',
            'festival' => $festival,
        ]);
    }

    /**
     * @Route("/festival/modifier/{id}",name="update_festival")
     */
    // public function update_festival(int $id, Request $request, EntityManagerInterface $manager)
    // {
    //     $repository = $this
    //         ->getDoctrine()
    //         ->getManager()
    //         ->getRepository('App:Festival');

    //     if (!empty($id)) {
    //         $festival = $repository->find($id);

    //         $festivalform = $this->createForm(festivalType::class, $festival);

    //         if ($festival) {
    //             $festivalform->handleRequest($request);

    //             if ($festivalform->isSubmitted() && $festivalform->isValid()) {
    //                 $data = $festivalform->getData();
    //                 $manager->persist($data);
    //                 $manager->flush();

    //                 //redirection sur la page détail du projet ajouté
    //                 return $this->redirectToRoute('festival', array('id' => $festival->getId()));
    //             }

    //             return $this->render('festival/update_festival.html.twig', [
    //                 'festivalform' => $festivalform->createView(),
    //                 'festival' => $festival
    //             ]);
    //         }
    //     }
    //     return $this->redirectToRoute('festivals');
    // }
}
