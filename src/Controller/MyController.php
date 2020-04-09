<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
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
    public function Hello()
    {
    
        return new Response(
            'Hello world'
        );
    }
    /**
     * @Route("/add/{x}/{y}", name="route2",  requirements={"x"="\d+"}),  requirements={"y"="\d+"}))
     */
    public function add($x, $y)
    {
        $res = $x+$y;
        return new Response(
            'la somme de '.$x.' + '.$y.' vaut '.$res.''
        );
    }
} 