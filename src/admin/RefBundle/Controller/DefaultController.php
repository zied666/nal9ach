<?php

namespace admin\RefBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('adminRefBundle:Default:index.html.twig');
    }
}
