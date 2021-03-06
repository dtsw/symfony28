<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GoShortcutUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Goshortcutuser controller.
 *
 * @Route("goshortcutuser")
 */
class GoShortcutUserController extends Controller
{
    /**
     * Lists all goShortcutUser entities.
     *
     * @Route("/", name="goshortcutuser_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $goShortcutUsers = $em->getRepository('AppBundle:GoShortcutUser')->findAll();

        return $this->render('goshortcutuser/index.html.twig', array(
            'goShortcutUsers' => $goShortcutUsers,
        ));
    }

    /**
     * Creates a new goShortcutUser entity.
     *
     * @Route("/new", name="goshortcutuser_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $goShortcutUser = new Goshortcutuser();
        $form = $this->createForm('AppBundle\Form\GoShortcutUserType', $goShortcutUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($goShortcutUser);
            $em->flush();

            return $this->redirectToRoute('goshortcutuser_show', array('id' => $goShortcutUser->getId()));
        }

        return $this->render('goshortcutuser/new.html.twig', array(
            'goShortcutUser' => $goShortcutUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a goShortcutUser entity.
     *
     * @Route("/{id}", name="goshortcutuser_show")
     * @Method("GET")
     */
    public function showAction(GoShortcutUser $goShortcutUser)
    {
        $deleteForm = $this->createDeleteForm($goShortcutUser);

        return $this->render('goshortcutuser/show.html.twig', array(
            'goShortcutUser' => $goShortcutUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing goShortcutUser entity.
     *
     * @Route("/{id}/edit", name="goshortcutuser_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GoShortcutUser $goShortcutUser)
    {
        $deleteForm = $this->createDeleteForm($goShortcutUser);
        $editForm = $this->createForm('AppBundle\Form\GoShortcutUserType', $goShortcutUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('goshortcutuser_edit', array('id' => $goShortcutUser->getId()));
        }

        return $this->render('goshortcutuser/edit.html.twig', array(
            'goShortcutUser' => $goShortcutUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a goShortcutUser entity.
     *
     * @Route("/{id}", name="goshortcutuser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GoShortcutUser $goShortcutUser)
    {
        $form = $this->createDeleteForm($goShortcutUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($goShortcutUser);
            $em->flush();
        }

        return $this->redirectToRoute('goshortcutuser_index');
    }

    /**
     * Creates a form to delete a goShortcutUser entity.
     *
     * @param GoShortcutUser $goShortcutUser The goShortcutUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GoShortcutUser $goShortcutUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goshortcutuser_delete', array('id' => $goShortcutUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
