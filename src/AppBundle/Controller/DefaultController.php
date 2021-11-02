<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/sayHelloTo/{name}", name="sayhello")
     */
    public function helloAction($name)
    {
        return new Response( "Hello " . ucfirst($name) );
    }

    /**
     * @Route("/sayByeTo/{name}", name="saybye")
     */
    public function byeAction($name)
    {
        $translated = $this->get('translator')->trans('symfony.is.great');
        return new Response( $translated . " " . ucfirst($name) );
    }

}
