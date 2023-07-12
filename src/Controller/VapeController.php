<?php

namespace App\Controller;

use App\Repository\VapeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VapeController extends AbstractController
{
    #[Route('/vape', name: 'app_vape')]
    public function index(VapeRepository $vapeRepository): Response
    {

        $vape = $vapeRepository -> findAll();

        return $this->render('vape/index.html.twig', [
            'controller_name' => 'VapeController',
            'vaper' => $vape,
        ]);
    }
}
