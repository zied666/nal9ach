<?php

namespace front\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\LocBundle\Entity\Region;
use admin\PageBundle\Entity\Accueil;
use admin\UserBundle\Entity\User;
use admin\UserBundle\Form\Type\RegistrationFormType;
use admin\RefBundle\Entity\Categorie;
use front\AnnonceBundle\Entity\Newslettre;
use front\AnnonceBundle\Form\NewslettreType;

class FrontController extends Controller
{
    
    public function photoheaderAction()
    { 
        $em = $this->getDoctrine()->getManager();
        $marketing = $em->getRepository("adminPageBundle:Marketing")->find(1);
        return $this->render('frontAccueilBundle:Front:photoheader.html.twig', array('marketing' => $marketing));
    }
    public function menuAction()
    {
        $categories = $this->getDoctrine()->getRepository("adminRefBundle:Categorie")->findBy(array("visible" => 1), array('ordre' => 'ASC'));
        return $this->render('frontAccueilBundle:Front:menu.html.twig', array('categories' => $categories));
    }
    
    public function menufooterAction()
    {
        $categories = $this->getDoctrine()->getRepository("adminRefBundle:Categorie")->findBy(array("visible" => 1), array('ordre' => 'ASC'));
        return $this->render('frontAccueilBundle:Front:menufooter.html.twig', array('categories' => $categories));
    }

    public function footerAction()
    {
        $form = $this->createForm(new NewslettreType(), new Newslettre());
        $footer = $this->getDoctrine()->getRepository("adminPageBundle:Footer")->find(1);
        return $this->render('frontAccueilBundle:Front:footer.html.twig', array('footer' => $footer, 'form' => $form->createView()));
    }
    
    public function socialAction()
    {
        $accueil= $this->getDoctrine()->getRepository("adminPageBundle:Accueil")->find(1);
        return $this->render('frontAccueilBundle:Front:social.html.twig', array('accueil' => $accueil));
    }
	
	public function sousmenuAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return $this->render('frontAccueilBundle:Front:sousmenu.html.twig', array('user' => $user));
    }

    public function newslettreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $form = $this->createForm(new NewslettreType(), new Newslettre());
        $request = $this->getRequest();
        if ($request->isMethod("POST"))
        {
            $form->bind($request);
            if ($form->isValid())
            {
                $newlettre = $form->getData();
                $Verif = $em->getRepository("frontAnnonceBundle:Newslettre")->findByEmail($newlettre->getEmail());
                if (count($Verif) == 0)
                {
                    $em->persist($newlettre);
                    $em->flush();
                    $session->getFlashBag()->add('alert-success', 'Votre Email a été inscrit à newslettre avec succées');
                }
                else
                    $session->getFlashBag()->add('alert', 'Votre Email est déjà inscrit à newslettre');
                return $this->redirect($this->generateUrl('accueil'));
            }
        }
    }

}
