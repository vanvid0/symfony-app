<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(): Response
{
    return $this->render('test/index.html.twig', [
        'test_name' => 'つげ',
        'products' => [
            ['name' => 'gsapマン', 'price' => 1000, 'image' => '/img/gsap-man.webp'],
            ['name' => 'gsapマン2', 'price' => 2000, 'image' => '/img/gsap-man2.webp'],
            ['name' => 'gsapマン3', 'price' => 3000, 'image' => '/img/gsap-man3.webp'],
        ],
    ]);
}
}