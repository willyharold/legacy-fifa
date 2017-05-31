<?php

namespace nano\fifaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('nanofifaBundle:Default:index.html.twig');
    }
}
