<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Tchat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tchat controller.
 *
 * @Route("tchat")
 */
class TchatController extends Controller
{
    /**
     * Lists all tchat entities.
     *
     * @Route("/", name="tchat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tchats = $em->getRepository('NanoFifaBundle:Tchat')->findAll();

        return $this->render('tchat/index.html.twig', array(
            'tchats' => $tchats,
        ));
    }

    /**
     * Creates a new tchat entity.
     *
     * @Route("/new", name="tchat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tchat = new Tchat();
        $form = $this->createForm('Nano\FifaBundle\Form\TchatType', $tchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tchat);
            $em->flush();

            return $this->redirectToRoute('tchat_show', array('id' => $tchat->getId()));
        }

        return $this->render('tchat/new.html.twig', array(
            'tchat' => $tchat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tchat entity.
     *
     * @Route("/{id}", name="tchat_show")
     * @Method("GET")
     */
    public function showAction(Tchat $tchat)
    {
        $deleteForm = $this->createDeleteForm($tchat);

        return $this->render('tchat/show.html.twig', array(
            'tchat' => $tchat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tchat entity.
     *
     * @Route("/{id}/edit", name="tchat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tchat $tchat)
    {
        $deleteForm = $this->createDeleteForm($tchat);
        $editForm = $this->createForm('Nano\FifaBundle\Form\TchatType', $tchat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tchat_edit', array('id' => $tchat->getId()));
        }

        return $this->render('tchat/edit.html.twig', array(
            'tchat' => $tchat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tchat entity.
     *
     * @Route("/{id}", name="tchat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tchat $tchat)
    {
        $form = $this->createDeleteForm($tchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tchat);
            $em->flush();
        }

        return $this->redirectToRoute('tchat_index');
    }

    /**
     * Creates a form to delete a tchat entity.
     *
     * @param Tchat $tchat The tchat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tchat $tchat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tchat_delete', array('id' => $tchat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
