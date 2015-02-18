<?php

namespace admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\UserBundle\Form\Type\RegistrationFormType;
use admin\UserBundle\Entity\User;
use front\AnnonceBundle\Entity\Newslettre;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class NewsLettresController extends Controller
{

    public function listeAction()
    {
        $em=$this->getDoctrine()->getManager();
        $newsletters=$em->getRepository("frontAnnonceBundle:Newslettre")->findAll();
        return $this->render('adminUserBundle:NewsLettres:liste.html.twig', array('newsletters'=>$newsletters));
    }

    public function sendAction()
    {
        $em=$this->getDoctrine()->getManager();
        $session=$this->getRequest()->getSession();
        $contact=$this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $newsletters=$em->getRepository("frontAnnonceBundle:Newslettre")->findAll();
        $request=$this->getRequest();
        if($request->isMethod("POST"))
        {
            $i=0;
            $Text=$request->get("EmailText");
            foreach($newsletters as $newsletter)
            {
                $message=\Swift_Message::newInstance()
                        ->setSubject('Equipe nal9ach.com')
                        ->setTo($newsletter->getEmail())
                        ->setFrom($contact->getEmail())
                        ->setContentType("text/html")
                        ->setBody($Text);
                $this->get('mailer')->send($message);
                $i++;
            }
            $session->getFlashBag()->add('alert-success', "Vous avez envoyer $i mails avec succées");
            return $this->redirect($this->generateUrl("NewsLettersSend"));
        }
        return $this->render('adminUserBundle:NewsLettres:send.html.twig');
    }

}
