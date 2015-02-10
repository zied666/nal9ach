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
use admin\PageBundle\Entity\Footer;
use admin\PageBundle\Form\FooterType;


class DefaultController extends Controller
{
    public function contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $contact = new contact();
        $contact=  $em->getRepository('adminPageBundle:Contact')->find(1);
        $form = $this->createForm(new contactType(),$contact);
        $form->add('Modifier', 'submit');
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $contact=$form->getData();
                $em->persist($contact);
                $em->flush();
                $session->getFlashBag()->add('alert-success','page contact a été modifié avec succées');
                return $this->redirect($this->generateUrl("page_contact"));
            }
        }
        return $this->render('adminPageBundle::contact.html.twig',array('form'=>$form->createView()));
    }
    
    
    
    public function marketingAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $mark = new Marketing();
        $mark=  $em->getRepository('adminPageBundle:Marketing')->find(1);
        $im1=$mark->getBanniere();
        $im2=$mark->getPhoto1();
        $im3=$mark->getPhoto2();
        $form = $this->createForm(new MarketingType(),$mark);
        $request=  $this->getRequest();
        if($request->isMethod("POST")){   
            $form->bind($request);
            if ($form->isValid()){
                $mark=$form->getData();
                $mark->Upload($im1,$im2,$im3);
                $em->persist($mark);
                $em->flush();
                $session->getFlashBag()->add('alert-success','les photos ont été modifié avec succées');
                $this->redirect($this->generateUrl('marketing'));
            }
        }
        return $this->render('adminPageBundle::marketing.html.twig',array('form'=>$form->createView(),'marketing'=>$mark));
    }
    
    public function accueilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $accueil= new Accueil();
        $accueil = $em->getRepository('adminPageBundle:Accueil')->find(1);
        if($accueil!=null)
            $img=$accueil->getLogo();
        else
            $img=null;
        $form = $this->createForm(new AccueilType(), $accueil);
        $request=  $this->getRequest();
        if($request->isMethod("POST")){   
            $form->bind($request);
            if ($form->isValid()){
                $accueil=$form->getData();
                $accueil->Upload($img);
                $em->persist($accueil);
                $em->flush();
                $session->getFlashBag()->add('alert-success','Page accueil été modifié avec succées');
                $this->redirect($this->generateUrl('marketing'));
            }
        }
        return $this->render('adminPageBundle::accueil.html.twig',array('form'=>$form->createView(),'accueil'=>$accueil));
    }
    
    public function footerAction()
    {
        $em=  $this->getDoctrine()->getManager();
        $session=  $this->getRequest()->getSession();
        $footer = new Footer;
        $footer=$em->getRepository("adminPageBundle:Footer")->find(1);
        $form=  $this->createForm(new FooterType(),$footer);
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $footer=$form->getData();
                $em->persist($footer);
                $em->flush();
                $session->getFlashBag()->add('alert-success','Footer été modifié avec succées');
                $this->redirect($this->generateUrl('footer'));
            }
        }
        return $this->render('adminPageBundle::footer.html.twig',array('form'=>$form->createView()));
    }
}