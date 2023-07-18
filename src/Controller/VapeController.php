<?php

namespace App\Controller;

use App\Entity\Vape;
use App\Repository\VapeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SearchVapeType;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\VapeCategoryRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class VapeController extends AbstractController
{
    #[Route('/vape', name: 'app_vape')]
    public function index(Request $request, VapeRepository $vapeRepository, VapeCategoryRepository $vapeCategoryRepository): Response
    {

        
        $form = $this->createForm(SearchVapeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'] ?? '';
            $categories = $form->getData()['categories'] ?? '';

            $vape = $vapeRepository->findLikeName($search, $categories);
        } else {
            $vape = $vapeRepository->findAll();
        }

        return $this->render('vape/index.html.twig', [
            'controller_name' => 'VapeController',
            'category' => $vapeCategoryRepository->findBy([], [
                'name' => 'ASC',
            ]),

            'vaper' => $vape,
            'form' => $form,
        ]);
    }

    #[Route('/details-vape/{id}/', name: 'vape_show')]
    public function show(
        int $id,
        VapeRepository $vapeRepository,
    ): Response {
        $vape = $vapeRepository->find($id);
        return $this->render('description/index.html.twig', [
        'vape' => $vape,
        ]);
    }

    #[Route('/{id}/favoris', name: 'vape_favorites', methods: ['POST', 'GET'])]
    public function addToFavorites(
        int $id,
        Request $request,
        Vape $vape,
        UserRepository $userRepository,
        VapeRepository $vapeRepository
    ): Response {
        /** @var User */
        $user = $this->getUser();
        $vape = $vapeRepository->find($id);
        if ($this->isCsrfTokenValid('favorite' . $vape->getId(), $request->request->get('_token'))) {
            if ($user->isFavorite($vape)) {
                $user->removeFavorite($vape);
            } else {
                $user->addFavorite($vape);
            }
            $userRepository->save($user, true);
        }
        return $this->render('description/index.html.twig', ['vape' => $vape]);
    }
    
}
