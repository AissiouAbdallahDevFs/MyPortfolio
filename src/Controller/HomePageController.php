<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/home', name: 'home_page')]
    public function index(SkillRepository $skillRepository,FormationRepository $formationRepository): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'formations' => $formationRepository->findAll(),
            'skills' => $skillRepository->findAll(),
        ]);
    }
}
