<?php

namespace Nano\FifaBundle\Controller;

use Nano\FifaBundle\Entity\Point;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Point controller.
 *
 * @Route("point")
 */
class PointController extends Controller
{
    /**
     * Lists all point entities.
     *
     * @Route("/", name="point_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $points = $em->getRepository('NanoFifaBundle:Point')->findAll();

        return $this->render('point/index.html.twig', array(
            'points' => $points,
        ));
    }

    /**
     * Creates a new point entity.
     *
     * @Route("/new", name="point_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $point = new Point();
        $form = $this->createForm('Nano\FifaBundle\Form\PointType', $point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($point);
            $em->flush();

            return $this->redirectToRoute('point_show', array('id' => $point->getId()));
        }

        return $this->render('point/new.html.twig', array(
            'point' => $point,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a point entity.
     *
     * @Route("/{id}", name="point_show")
     * @Method("GET")
     */
    public function showAction(Point $point)
    {
        $deleteForm = $this->createDeleteForm($point);

        return $this->render('point/show.html.twig', array(
            'point' => $point,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing point entity.
     *
     * @Route("/{id}/edit", name="point_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Point $point)
    {
        $deleteForm = $this->createDeleteForm($point);
        $editForm = $this->createForm('Nano\FifaBundle\Form\PointType', $point);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('point_edit', array('id' => $point->getId()));
        }

        return $this->render('point/edit.html.twig', array(
            'point' => $point,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a point entity.
     *
     * @Route("/{id}", name="point_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Point $point)
    {
        $form = $this->createDeleteForm($point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($point);
            $em->flush();
        }

        return $this->redirectToRoute('point_index');
    }

    /**
     * Creates a form to delete a point entity.
     *
     * @param Point $point The point entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Point $point)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('point_delete', array('id' => $point->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
