<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/registration", name="registration")
     */
    public function registration() {
        return $this->render('default/registration.html.twig', []);
    }
}
