<?php

namespace test\tutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('testtutoBundle:Default:index.html.twig');
    }
}
