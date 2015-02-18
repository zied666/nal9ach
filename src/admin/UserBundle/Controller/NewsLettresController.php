<?php

namespace admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\UserBundle\Form\Type\RegistrationFormType;
use admin\UserBundle\Entity\User;
use front\AnnonceBundle\Entity\Newslettre;

class NewsLettresController extends Controller
{
    public function listeAction()
    {
        $em=$this->getDoctrine()->getManager();
        $newsletters=$em->getRepository("frontAnnonceBundle:Newslettre")->findAll();
        return $this->render('adminUserBundle:NewsLettres:liste.html.twig',array('newsletters'=>$newsletters));
    }
}
