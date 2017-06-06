<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Matchs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Match controller.
 *
 * @Route("matchs")
 */
class MatchsController extends Controller
{
    /**
     * Lists all match entities.
     *
     * @Route("/", name="matchs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matchs = $em->getRepository('NanoFifaBundle:Matchs')->findAll();

        return $this->render('matchs/index.html.twig', array(
            'matchs' => $matchs,
        ));
    }

    /**
     * Creates a new match entity.
     *
     * @Route("/new", name="matchs_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $match = new Match();
        $form = $this->createForm('Nano\FifaBundle\Form\MatchsType', $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($match);
            $em->flush();

            return $this->redirectToRoute('matchs_show', array('id' => $match->getId()));
        }

        return $this->render('matchs/new.html.twig', array(
            'match' => $match,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a match entity.
     *
     * @Route("/{id}", name="matchs_show")
     * @Method("GET")
     */
    public function showAction(Matchs $match)
    {
        $deleteForm = $this->createDeleteForm($match);

        return $this->render('matchs/show.html.twig', array(
            'match' => $match,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing match entity.
     *
     * @Route("/{id}/edit", name="matchs_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matchs $match)
    {
        $deleteForm = $this->createDeleteForm($match);
        $editForm = $this->createForm('Nano\FifaBundle\Form\MatchsType', $match);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matchs_edit', array('id' => $match->getId()));
        }

        return $this->render('matchs/edit.html.twig', array(
            'match' => $match,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a match entity.
     *
     * @Route("/{id}", name="matchs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matchs $match)
    {
        $form = $this->createDeleteForm($match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($match);
            $em->flush();
        }

        return $this->redirectToRoute('matchs_index');
    }

    /**
     * Creates a form to delete a match entity.
     *
     * @param Matchs $match The match entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matchs $match)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matchs_delete', array('id' => $match->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
