<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GoShortcut;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Goshortcut controller.
 *
 * @Route("goshortcut")
 */
class GoShortcutController extends Controller
{
    /**
     * Lists all goShortcut entities.
     *
     * @Route("/", name="goshortcut_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $goShortcuts = $em->getRepository('AppBundle:GoShortcut')->findAll();

        return $this->render('goshortcut/index.html.twig', array(
            'goShortcuts' => $goShortcuts,
        ));
    }

    /**
     * Creates a new goShortcut entity.
     *
     * @Route("/new", name="goshortcut_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $goShortcut = new Goshortcut();
        $form = $this->createForm('AppBundle\Form\GoShortcutType', $goShortcut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($goShortcut);
            $em->flush();

            return $this->redirectToRoute('goshortcut_show', array('id' => $goShortcut->getId()));
        }

        return $this->render('goshortcut/new.html.twig', array(
            'goShortcut' => $goShortcut,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a goShortcut entity.
     *
     * @Route("/{id}", name="goshortcut_show")
     * @Method("GET")
     */
    public function showAction(GoShortcut $goShortcut)
    {
        $deleteForm = $this->createDeleteForm($goShortcut);

        return $this->render('goshortcut/show.html.twig', array(
            'goShortcut' => $goShortcut,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing goShortcut entity.
     *
     * @Route("/{id}/edit", name="goshortcut_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GoShortcut $goShortcut)
    {
        $deleteForm = $this->createDeleteForm($goShortcut);
        $editForm = $this->createForm('AppBundle\Form\GoShortcutType', $goShortcut);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('goshortcut_edit', array('id' => $goShortcut->getId()));
        }

        return $this->render('goshortcut/edit.html.twig', array(
            'goShortcut' => $goShortcut,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a goShortcut entity.
     *
     * @Route("/{id}", name="goshortcut_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GoShortcut $goShortcut)
    {
        $form = $this->createDeleteForm($goShortcut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($goShortcut);
            $em->flush();
        }

        return $this->redirectToRoute('goshortcut_index');
    }

    /**
     * Creates a form to delete a goShortcut entity.
     *
     * @param GoShortcut $goShortcut The goShortcut entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GoShortcut $goShortcut)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goshortcut_delete', array('id' => $goShortcut->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
