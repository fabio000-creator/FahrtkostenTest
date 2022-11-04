<?php

namespace App\Controller;

use App\Entity\Fahrtkosten;
use App\Form\FahrtkostenType;
use App\Repository\FahrtkostenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FahrtkostenController extends AbstractController
{
    #[Route('/overview', name: 'app_fahrtkosten_auth', methods: ['GET'])]
    public function auth(): Response
    {

            return $this->render('fahrtkosten/no_admin.html.twig');

    }


    #[Route('/4Qw7KoiH80Zqr00!55GZI&4HhWfVdRMhRJL5#l5&P6$Qi1wbjK33pHFp8so#y9ln70y3ubX0WY*kDA3Hz9LXxAdF9mIscCKknW9', name: 'app_fahrtkosten_index', methods: ['GET'])]
    public function index(FahrtkostenRepository $fahrtkostenRepository): Response
    {

        return $this->render('fahrtkosten/index.html.twig', [
            'fahrtkostens' => $fahrtkostenRepository->findAll(),
        ]);
    }




    #[Route('/', name: 'app_fahrtkosten_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FahrtkostenRepository $fahrtkostenRepository): Response
    {
        $fahrtkosten = new Fahrtkosten();
        $form = $this->createForm(FahrtkostenType::class, $fahrtkosten);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fahrtkostenRepository->save($fahrtkosten, true);

            return $this->redirectToRoute('app_fahrtkosten_auth', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fahrtkosten/new.html.twig', [
            'fahrtkosten' => $fahrtkosten,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fahrtkosten_show', methods: ['GET'])]
    public function show(Fahrtkosten $fahrtkosten): Response
    {
        return $this->render('fahrtkosten/show.html.twig', [
            'fahrtkosten' => $fahrtkosten,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fahrtkosten_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fahrtkosten $fahrtkosten, FahrtkostenRepository $fahrtkostenRepository): Response
    {
        $form = $this->createForm(FahrtkostenType::class, $fahrtkosten);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fahrtkostenRepository->save($fahrtkosten, true);

            return $this->redirectToRoute('app_fahrtkosten_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fahrtkosten/edit.html.twig', [
            'fahrtkosten' => $fahrtkosten,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fahrtkosten_delete', methods: ['POST'])]
    public function delete(Request $request, Fahrtkosten $fahrtkosten, FahrtkostenRepository $fahrtkostenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fahrtkosten->getId(), $request->request->get('_token'))) {
            $fahrtkostenRepository->remove($fahrtkosten, true);
        }

        return $this->redirectToRoute('app_fahrtkosten_index', [], Response::HTTP_SEE_OTHER);
    }
}
