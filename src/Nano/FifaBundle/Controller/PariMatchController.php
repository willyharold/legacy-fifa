<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\PariMatch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Parimatch controller.
 *
 * @Route("parimatch")
 */
class PariMatchController extends Controller
{
    /**
     * Lists all pariMatch entities.
     *
     * @Route("/", name="parimatch_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pariMatches = $em->getRepository('NanoFifaBundle:PariMatch')->findAll();

        return $this->render('parimatch/index.html.twig', array(
            'pariMatches' => $pariMatches,
        ));
    }

    /**
     * Creates a new pariMatch entity.
     *
     * @Route("/new", name="parimatch_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pariMatch = new Parimatch();
        $form = $this->createForm('Nano\FifaBundle\Form\PariMatchType', $pariMatch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pariMatch);
            $em->flush();

            return $this->redirectToRoute('parimatch_show', array('id' => $pariMatch->getId()));
        }

        return $this->render('parimatch/new.html.twig', array(
            'pariMatch' => $pariMatch,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pariMatch entity.
     *
     * @Route("/{id}", name="parimatch_show")
     * @Method("GET")
     */
    public function showAction(PariMatch $pariMatch)
    {
        $deleteForm = $this->createDeleteForm($pariMatch);

        return $this->render('parimatch/show.html.twig', array(
            'pariMatch' => $pariMatch,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pariMatch entity.
     *
     * @Route("/{id}/edit", name="parimatch_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PariMatch $pariMatch)
    {
        $deleteForm = $this->createDeleteForm($pariMatch);
        $editForm = $this->createForm('Nano\FifaBundle\Form\PariMatchType', $pariMatch);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('parimatch_edit', array('id' => $pariMatch->getId()));
        }

        return $this->render('parimatch/edit.html.twig', array(
            'pariMatch' => $pariMatch,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pariMatch entity.
     *
     * @Route("/{id}", name="parimatch_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PariMatch $pariMatch)
    {
        $form = $this->createDeleteForm($pariMatch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pariMatch);
            $em->flush();
        }

        return $this->redirectToRoute('parimatch_index');
    }

    /**
     * Creates a form to delete a pariMatch entity.
     *
     * @param PariMatch $pariMatch The pariMatch entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PariMatch $pariMatch)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parimatch_delete', array('id' => $pariMatch->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
