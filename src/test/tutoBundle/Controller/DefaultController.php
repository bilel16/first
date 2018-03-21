<?php

namespace test\tutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('testtutoBundle:Default:index.html.twig');
    }
    public function afficheAction()
    {
        $x="Binjour Bilel";
        return $this->render('testtutoBundle:Default:affiche.html.twig',array("x"=>$x));
    }
}
