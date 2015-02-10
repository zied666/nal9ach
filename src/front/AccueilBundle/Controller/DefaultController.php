<?php

namespace front\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\LocBundle\Entity\Region;
use admin\PageBundle\Entity\Accueil;
use admin\UserBundle\Entity\User;
use admin\UserBundle\Form\Type\RegistrationFormType;

class DefaultController extends Controller
{
 
    public function indexAction() 
    {
        $em = $this->getDoctrine()->getManager();
        $accueil = new Accueil();
        $categories= $em->getRepository("adminRefBundle:Categorie")->findAll();
        $marketing = $em->getRepository("adminPageBundle:Marketing")->find(1);
        $accueil = $em->getRepository('adminPageBundle:Accueil')->find(1);
        $GrandTunis = $em->getRepository("adminLocBundle:Region")->find(36);
        $regions = $em->getRepository("adminLocBundle:Region")->findBy(array(), array('libelle' => 'ASC'), 11);
        $regions2 = $em->getRepository("adminLocBundle:Region")->findBy(array(), array('libelle' => 'ASC'), 10, 11);
        return $this->render('frontAccueilBundle:Default:accueil.html.twig', array('marketing' => $marketing, 'accueil' => $accueil,'GrandTunis' => $GrandTunis , 'regions' => $regions, 'regions2' => $regions2,'categories'=>$categories));
    }

    public function profileAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $form = $this->createForm(new RegistrationFormType, $user);
        $form->remove('plainPassword');
        $form->add('username', 'text', array('read_only' => true));
        $form->add('email', 'text', array('read_only' => true));
        $form->remove('Enregistrer', 'submit');
        $form->add('Modifier', 'submit', array('attr' => array('class' => 'btn btn-primary bold')));
        $request = $this->getRequest();
        if ($request->isMethod("POST"))
        {
            $form->bind($request);
            if ($form->isValid())
            {
                $user = new user();
                $user = $form->getData();
                $user->addRole("ROLE_ADMIN");
                $em->persist($user);
                $em->flush();
                $session->getFlashBag()->add('alert-success', 'Votre profile a été modifié avec succées');
                return $this->redirect($this->generateUrl("monprofile"));
            }
        }
        return $this->render('frontAccueilBundle:Default:monprofile.html.twig', array('form' => $form->createView()));
    }

    public function contactAction()
    {
        $contact = $this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $session = $this->getRequest()->getSession();
        $request = $this->getRequest();
        if ($request->isMethod("post") && $request->get("nom") != null && $request->get("email") != null && $request->get("texte") != null)
        {
            $body="Salut, vous avez réçus un message contact :<br>";
            $body.="<br> <strong> Nom & prénom </strong> :  ".$request->get("nom");
            $body.="<br> <strong> Tel </strong> :  ".$request->get("tel");
            $body.="<br> <strong> Email </strong> :  ".$request->get("email");
            $body.="<br> <strong> Message </strong> :  <br>".$request->get("texte");
            $body.="<br><br> Cordialement Equipe nal9ach.com";
            $message = \Swift_Message::newInstance()
                    ->setSubject('Message contact ')
                    ->setFrom($request->get("email"))
                    ->setTo($contact->getEmail())
                    ->setContentType("text/html")
                    ->setBody($body)
            ;
            $this->get('mailer')->send($message);
            $session->getFlashBag()->add('alert-success', 'Votre message a été envoyé avec succées');
            return $this->redirect($this->generateUrl("contact"));
        }




        return $this->render('frontAccueilBundle:Default:contact.html.twig', array('contact' => $contact));
    }

    public function quisommesnousAction()
    {
        return $this->render('frontAccueilBundle:Default:quisommesnous.html.twig');
    }

}
