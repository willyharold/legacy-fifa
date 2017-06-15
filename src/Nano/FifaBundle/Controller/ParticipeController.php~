<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Participe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Participe controller.
 *
 */
class ParticipeController extends Controller
{
    /**
     * Lists all participe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $participes = $em->getRepository('NanoFifaBundle:Participe')->findAll();

        return $this->render('participe/index.html.twig', array(
            'participes' => $participes,
        ));
    }

    /**
     * Creates a new participe entity.
     *
     */
    public function newAction(Request $request)
    {
        $participe = new Participe();
        $form = $this->createForm('Nano\FifaBundle\Form\ParticipeType', $participe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participe);
            $em->flush();

            return $this->redirectToRoute('participe_show', array('id' => $participe->getId()));
        }

        return $this->render('participe/new.html.twig', array(
            'participe' => $participe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a participe entity.
     *
     */
    public function showAction(Participe $participe)
    {
        $deleteForm = $this->createDeleteForm($participe);

        return $this->render('participe/show.html.twig', array(
            'participe' => $participe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing participe entity.
     *
     */
    public function editAction(Request $request, Participe $participe)
    {
        $deleteForm = $this->createDeleteForm($participe);
        $editForm = $this->createForm('Nano\FifaBundle\Form\ParticipeType', $participe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participe_edit', array('id' => $participe->getId()));
        }

        return $this->render('participe/edit.html.twig', array(
            'participe' => $participe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a participe entity.
     *
     */
    public function deleteAction(Request $request, Participe $participe)
    {
        $form = $this->createDeleteForm($participe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participe);
            $em->flush();
        }

        return $this->redirectToRoute('participe_index');
    }

    /**
     * Creates a form to delete a participe entity.
     *
     * @param Participe $participe The participe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Participe $participe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('participe_delete', array('id' => $participe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
