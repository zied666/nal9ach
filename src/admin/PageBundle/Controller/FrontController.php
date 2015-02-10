<?php

namespace admin\PageBundle\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\PageBundle\Form\contactType;
use admin\PageBundle\Entity\contact;
use admin\PageBundle\Entity\Marketing;
use admin\PageBundle\Form\MarketingType;
use admin\PageBundle\Entity\Accueil;
use admin\PageBundle\Form\AccueilType;

class FrontController extends Controller
{
    public function logoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $accueil= new Accueil();
        $accueil = $em->getRepository('adminPageBundle:Accueil')->find(1);
        return $this->render('adminPageBundle:front:logo.html.twig',array('accueil'=>$accueil));
    }
    public function partenaireAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $parts= new Accueil();
        $parts = $em->getRepository('adminPageBundle:Partenaire')->findAll();
        return $this->render('adminPageBundle:front:partenaire.html.twig',array('partenaires'=>$parts));
    }
    
    public function newsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $news= new Accueil();
        $news = $em->getRepository('adminPageBundle:News')->findAll();
        return $this->render('adminPageBundle:front:news.html.twig',array('news'=>$news));
    }
    public function donneesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('frontAnnonceBundle:Commentaire')->findAll();
        $annonces = $em->getRepository('frontAnnonceBundle:Annonce')->findBy(array('etat'=>1));
        $annoncesE = $em->getRepository('frontAnnonceBundle:Annonce')->findBy(array('etat'=>9));
        $users = $em->getRepository('adminUserBundle:User')->findAll();
        $newslettre = $em->getRepository('frontAnnonceBundle:Newslettre')->findAll();
        return $this->render('adminPageBundle:front:donnees.html.twig',array(
            'comments'=>count($comments),
            'annonces'=>count($annonces),
            'annoncesE'=>count($annoncesE),
            'users'=>count($users),
            'newslettre'=>count($newslettre),
            ));
    }
}