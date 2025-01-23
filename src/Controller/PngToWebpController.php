<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'pngtowebp')]
class PngToWebpController  extends AbstractController
{
    #[Route('/png-webp', name: 'pngtowebp')]
    public function index(): Response
    {
        return $this->render('converter/pngtowebp.html.twig', [
        ]);
    }
}