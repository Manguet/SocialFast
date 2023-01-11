<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('', name: 'socialFast')]
class DefaultController extends AbstractController
{
    #[Route('', name: '')]
    public function index(): Response
    {
        return $this->render('pages/homepage.html.twig');
    }
}