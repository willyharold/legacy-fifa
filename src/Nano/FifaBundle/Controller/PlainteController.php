<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Plainte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Plainte controller.
 *
 * @Route("plainte")
 */
class PlainteController extends Controller
{
    /**
     * Lists all plainte entities.
     *
     * @Route("/", name="plainte_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $plaintes = $em->getRepository('NanoFifaBundle:Plainte')->findAll();

        return $this->render('plainte/index.html.twig', array(
            'plaintes' => $plaintes,
        ));
    }

    /**
     * Creates a new plainte entity.
     *
     * @Route("/new", name="plainte_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $plainte = new Plainte();
        $form = $this->createForm('Nano\FifaBundle\Form\PlainteType', $plainte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plainte);
            $em->flush();

            return $this->redirectToRoute('plainte_show', array('id' => $plainte->getId()));
        }

        return $this->render('plainte/new.html.twig', array(
            'plainte' => $plainte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plainte entity.
     *
     * @Route("/{id}", name="plainte_show")
     * @Method("GET")
     */
    public function showAction(Plainte $plainte)
    {
        $deleteForm = $this->createDeleteForm($plainte);

        return $this->render('plainte/show.html.twig', array(
            'plainte' => $plainte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plainte entity.
     *
     * @Route("/{id}/edit", name="plainte_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Plainte $plainte)
    {
        $deleteForm = $this->createDeleteForm($plainte);
        $editForm = $this->createForm('Nano\FifaBundle\Form\PlainteType', $plainte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plainte_edit', array('id' => $plainte->getId()));
        }

        return $this->render('plainte/edit.html.twig', array(
            'plainte' => $plainte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a plainte entity.
     *
     * @Route("/{id}", name="plainte_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Plainte $plainte)
    {
        $form = $this->createDeleteForm($plainte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plainte);
            $em->flush();
        }

        return $this->redirectToRoute('plainte_index');
    }

    /**
     * Creates a form to delete a plainte entity.
     *
     * @param Plainte $plainte The plainte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Plainte $plainte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plainte_delete', array('id' => $plainte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
