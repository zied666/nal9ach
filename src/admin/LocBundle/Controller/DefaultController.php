<?php

namespace admin\LocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('adminLocBundle:Default:index.html.twig', array('name' => $name));
    }
}
