<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtisteController extends AbstractController
{
    /**
     * @Route("/artistes", name="artistes", methods={"GET"})
     */
    public function listeArtistes(ArtisteRepository $repo)
    {
        $artistes=$repo->listeArtistesComplete();
        $test="test";
        return $this->render('artiste/listeArtistes.html.twig', [
            'lesArtistes' => $artistes,
        ]);
    }

            /**
     * @Route("/artiste/{id}", name="ficheArtiste", methods={"GET"})
     */
    public function ficheArtistes(Artiste $artiste)
    {
        return $this->render('artiste/ficheArtiste.html.twig', [
            'leArtiste' => $artiste,
        ]);
    }
}
