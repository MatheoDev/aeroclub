<?php

namespace App\Controller;

use App\Entity\Comptes;
use App\Entity\Membres;
use App\Repository\ComptesRepository;
use App\Repository\MembresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    private $repository;

    public function __construct(MembresRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        $users = $this->repository->findAll();
        $numberUser = count($users);
        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'controller_name' => 'AdminController',
            'numberuser' => $numberUser
        ]);
    }

    /**
     * @param $id
     * @Route("/admin/profil/{id}", name="admin-profil")
     */
    public function show($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Membres::class);
        $repoC = $this->getDoctrine()->getRepository(Comptes::class);
        $membre = $repo->find($id);
        $compte = $repoC->findBY(array(
            'numMembre' => $id
        ));
        return $this->render('admin/profilshow.html.twig', [
            'user' => $membre,
            'compte' => $compte
        ]);
    }
}
