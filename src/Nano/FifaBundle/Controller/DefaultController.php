<?php

namespace Nano\FifaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NanoFifaBundle:Default:index.html.twig');
    }
}
