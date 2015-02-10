<?php

namespace admin\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $users=  $this->getDoctrine()->getRepository("adminUserBundle:User")->findAll();
        $regions=  $this->getDoctrine()->getRepository("adminLocBundle:Region")->findAll();
        return $this->render('adminGeneralBundle:Default:accueil.html.twig',array('users'=>  count($users),'regions'=>  count($regions)));
    }
}
