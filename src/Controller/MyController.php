<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MyController extends AbstractController
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            'Tirage aléatoire: '.$number.''
        );
    }
    /**
     * @Route("/hello", name="route1")
     */
    public function nouveauController()
    {


        return new Response(
            'HELLO WORLD'
        );
    }
    /**
     * @Route("/affiche/{nombre}", name="route1")
     */
    public function parmametreEnSymfony($nombre)
    {


        return new Response(
            'nombre saisi:'.$nombre.''
        );
    }
    /**
     * @Route("/addition/{nombre1}/{nombre2}", name="route1",requirements={"nombre2"="\d+"},requirements={"nombre1"="\d+"})
     */
    public function addition($nombre1, $nombre2)
    {

        $total = $nombre1+$nombre2;
        return new Response(
            'Somme:'.$total.''
        );
    }
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
}