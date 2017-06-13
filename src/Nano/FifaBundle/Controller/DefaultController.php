<?php

namespace NanoFifaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('NanoFifaBundle:Admin:index.html.twig');
    }
}
