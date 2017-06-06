<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Suggestion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suggestion controller.
 *
 * @Route("suggestion")
 */
class SuggestionController extends Controller
{
    /**
     * Lists all suggestion entities.
     *
     * @Route("/", name="suggestion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suggestions = $em->getRepository('NanoFifaBundle:Suggestion')->findAll();

        return $this->render('suggestion/index.html.twig', array(
            'suggestions' => $suggestions,
        ));
    }

    /**
     * Creates a new suggestion entity.
     *
     * @Route("/new", name="suggestion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suggestion = new Suggestion();
        $form = $this->createForm('Nano\FifaBundle\Form\SuggestionType', $suggestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suggestion);
            $em->flush();

            return $this->redirectToRoute('suggestion_show', array('id' => $suggestion->getId()));
        }

        return $this->render('suggestion/new.html.twig', array(
            'suggestion' => $suggestion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suggestion entity.
     *
     * @Route("/{id}", name="suggestion_show")
     * @Method("GET")
     */
    public function showAction(Suggestion $suggestion)
    {
        $deleteForm = $this->createDeleteForm($suggestion);

        return $this->render('suggestion/show.html.twig', array(
            'suggestion' => $suggestion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suggestion entity.
     *
     * @Route("/{id}/edit", name="suggestion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Suggestion $suggestion)
    {
        $deleteForm = $this->createDeleteForm($suggestion);
        $editForm = $this->createForm('Nano\FifaBundle\Form\SuggestionType', $suggestion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suggestion_edit', array('id' => $suggestion->getId()));
        }

        return $this->render('suggestion/edit.html.twig', array(
            'suggestion' => $suggestion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suggestion entity.
     *
     * @Route("/{id}", name="suggestion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Suggestion $suggestion)
    {
        $form = $this->createDeleteForm($suggestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suggestion);
            $em->flush();
        }

        return $this->redirectToRoute('suggestion_index');
    }

    /**
     * Creates a form to delete a suggestion entity.
     *
     * @param Suggestion $suggestion The suggestion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Suggestion $suggestion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suggestion_delete', array('id' => $suggestion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
