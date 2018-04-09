<?php

namespace App\Controller;

use App\Entity\Chocolate;
use App\Form\ChocolateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/chocolate", name="chocolate_")
 */
class ChocolateController extends Controller
{
    /**
     * @Route("/", name="index")
     *
     * @return Response
     */
    public function index()
    {
        $chocolates = $this->getDoctrine()
            ->getRepository(Chocolate::class)
            ->findAll();

        return $this->render('chocolate/index.html.twig', ['chocolates' => $chocolates]);
    }

    /**
     * @Route("/new", name="new")
     * @Method({"GET", "POST"})
     */
    public function new(Request $request)
    {
        $chocolate = new Chocolate();
        $form = $this->createForm(ChocolateType::class, $chocolate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chocolate);
            $em->flush();

            return $this->redirectToRoute('chocolate_edit', ['id' => $chocolate->getId()]);
        }

        return $this->render('chocolate/new.html.twig', [
            'chocolate' => $chocolate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     * @Method("GET")
     */
    public function show(Chocolate $chocolate)
    {
        return $this->render('chocolate/show.html.twig', [
            'chocolates' => $chocolate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     * @Method({"GET", "POST"})
     */
    public function edit(Request $request, Chocolate $chocolate)
    {
        $form = $this->createForm(ChocolateType::class, $chocolate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chocolate_edit', ['id' => $chocolate->getId()]);
        }

        return $this->render('chocolate/edit.html.twig', [
            'chocolate' => $chocolate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete")
     * @Method("DELETE")
     */
    public function delete(Request $request, Chocolate $chocolate)
    {
        if (!$this->isCsrfTokenValid('delete'.$chocolate->getId(), $request->request->get('_token'))) {
            return $this->redirectToRoute('chocolate_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($chocolate);
        $em->flush();

        return $this->redirectToRoute('chocolate_index');
    }
}
