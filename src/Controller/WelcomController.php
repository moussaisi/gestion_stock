<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

}