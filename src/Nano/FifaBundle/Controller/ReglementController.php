<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Reglement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reglement controller.
 *
 */
class ReglementController extends Controller
{
    /**
     * Lists all reglement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reglements = $em->getRepository('NanoFifaBundle:Reglement')->findAll();

        return $this->render('reglement/index.html.twig', array(
            'reglements' => $reglements,
        ));
    }

    /**
     * Creates a new reglement entity.
     *
     */
    public function newAction(Request $request)
    {
        $reglement = new Reglement();
        $form = $this->createForm('Nano\FifaBundle\Form\ReglementType', $reglement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reglement);
            $em->flush();

            return $this->redirectToRoute('reglement_show', array('id' => $reglement->getId()));
        }

        return $this->render('reglement/new.html.twig', array(
            'reglement' => $reglement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reglement entity.
     *
     */
    public function showAction(Reglement $reglement)
    {
        $deleteForm = $this->createDeleteForm($reglement);

        return $this->render('reglement/show.html.twig', array(
            'reglement' => $reglement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reglement entity.
     *
     */
    public function editAction(Request $request, Reglement $reglement)
    {
        $deleteForm = $this->createDeleteForm($reglement);
        $editForm = $this->createForm('Nano\FifaBundle\Form\ReglementType', $reglement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reglement_edit', array('id' => $reglement->getId()));
        }

        return $this->render('reglement/edit.html.twig', array(
            'reglement' => $reglement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reglement entity.
     *
     */
    public function deleteAction(Request $request, Reglement $reglement)
    {
        $form = $this->createDeleteForm($reglement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reglement);
            $em->flush();
        }

        return $this->redirectToRoute('reglement_index');
    }

    /**
     * Creates a form to delete a reglement entity.
     *
     * @param Reglement $reglement The reglement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reglement $reglement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reglement_delete', array('id' => $reglement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
