<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Charge;
use Nano\FifaBundle\Form\ChargeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Tournois controller.
 *
 */
class TournoisController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tournois = $em->getRepository('NanoFifaBundle:Tournois')->findAll();

        return $tournois;
    }

    /**
     * Creates a new tournois entity.
     *
     */
    public function newAction(Request $request)
    {
        $tournois = new Tournois();
        $form = $this->createForm('Nano\FifaBundle\Form\TournoisType', $tournois);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournois);
            $em->flush();

            return $this->redirectToRoute('tournois_show', array('id' => $tournois->getId()));
        }

        return $this->render('tournois/new.html.twig', array(
            'tournois' => $tournois,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tournois entity.
     *
     */
    public function showAction(Tournois $tournois)
    {
        $deleteForm = $this->createDeleteForm($tournois);

        return $this->render('tournois/show.html.twig', array(
            'tournois' => $tournois,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tournois entity.
     *
     */
    public function editAction(Request $request, Tournois $tournois)
    {
        $deleteForm = $this->createDeleteForm($tournois);
        $editForm = $this->createForm('Nano\FifaBundle\Form\TournoisType', $tournois);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tournois_edit', array('id' => $tournois->getId()));
        }

        return $this->render('tournois/edit.html.twig', array(
            'tournois' => $tournois,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tournois entity.
     *
     */
    public function deleteAction(Request $request, Tournois $tournois)
    {
        $form = $this->createDeleteForm($tournois);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tournois);
            $em->flush();
        }

        return $this->redirectToRoute('tournois_index');
    }

    /**
     * Creates a form to delete a tournois entity.
     *
     * @param Tournois $tournois The tournois entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tournois $tournois)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tournois_delete', array('id' => $tournois->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
