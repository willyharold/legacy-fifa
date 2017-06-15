<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Historique_credit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Historique_credit controller.
 *
 */
class Historique_creditController extends Controller
{
    /**
     * Lists all historique_credit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historique_credits = $em->getRepository('NanoFifaBundle:Historique_credit')->findAll();

        return $this->render('historique_credit/index.html.twig', array(
            'historique_credits' => $historique_credits,
        ));
    }

    /**
     * Creates a new historique_credit entity.
     *
     */
    public function newAction(Request $request)
    {
        $historique_credit = new Historique_credit();
        $form = $this->createForm('Nano\FifaBundle\Form\Historique_creditType', $historique_credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historique_credit);
            $em->flush();

            return $this->redirectToRoute('historique_credit_show', array('id' => $historique_credit->getId()));
        }

        return $this->render('historique_credit/new.html.twig', array(
            'historique_credit' => $historique_credit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a historique_credit entity.
     *
     */
    public function showAction(Historique_credit $historique_credit)
    {
        $deleteForm = $this->createDeleteForm($historique_credit);

        return $this->render('historique_credit/show.html.twig', array(
            'historique_credit' => $historique_credit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing historique_credit entity.
     *
     */
    public function editAction(Request $request, Historique_credit $historique_credit)
    {
        $deleteForm = $this->createDeleteForm($historique_credit);
        $editForm = $this->createForm('Nano\FifaBundle\Form\Historique_creditType', $historique_credit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('historique_credit_edit', array('id' => $historique_credit->getId()));
        }

        return $this->render('historique_credit/edit.html.twig', array(
            'historique_credit' => $historique_credit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a historique_credit entity.
     *
     */
    public function deleteAction(Request $request, Historique_credit $historique_credit)
    {
        $form = $this->createDeleteForm($historique_credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historique_credit);
            $em->flush();
        }

        return $this->redirectToRoute('historique_credit_index');
    }

    /**
     * Creates a form to delete a historique_credit entity.
     *
     * @param Historique_credit $historique_credit The historique_credit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Historique_credit $historique_credit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_credit_delete', array('id' => $historique_credit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
