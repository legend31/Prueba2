<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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
     * @Route("/fer/{n}",  defaults={"n" = "Fercho"}, name="vista")
     */
    public function ferAction($n){
        return new Response('Hola '.$n);
        //return $this->render("default/orgu.html.twig");
    }
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    /**
     * @Route("/admin/saludo")
     */
    public function adminSaludoAction()
    {
        return new Response('<html><body>Hola Admin!</body></html>');
    }
    /**
     * @Route("/admin/home")
     */
    public function adminHomeAction()
    {
        return new Response('<html><body><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem delectus incidunt labore natus nesciunt possimus quasi rerum temporibus vitae? Alias debitis esse impedit laudantium obcaecati quo tempore, voluptate voluptatum!</p></body></html>');
    }

}
