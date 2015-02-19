<?php

namespace front\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use front\AnnonceBundle\Entity\Annonce;
use front\AnnonceBundle\Form\AnnonceType;
use Symfony\Component\HttpFoundation\JsonResponse;
use front\AnnonceBundle\Entity\Commentaire;

class AnnonceController extends Controller
{

    public function ajoutAction()
    {

        $annonce = new Annonce();
        $session = $this->getRequest()->getSession();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $annonce->setEmail($user->getEmail());
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("adminRefBundle:Categorie")->findAll();
        $form = $this->createForm(new AnnonceType(), new Annonce());
        $request = $this->getRequest();
        if ($request->isMethod("POST"))
        {
            try
            {
                $form->bind($request);
                if ($form->isValid())
                {
                    $annonce = $form->getData();
                    $contact = $this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
                    $annonce->setUser($user)->setEtat(1)->setDateCreation(new \DateTime("now"))->setDateModification(new \DateTime("now"));
                    $services = $request->get("services");
                    $annonce->upload();
                    for ($i = 0; $i < count($services); $i++)
                    {
                        $service = $em->getRepository("adminRefBundle:Service")->find($services[$i]);
                        $annonce->addService($service);
                    }
                    $em->persist($annonce);
                    $em->flush();
                    //Send Mail
					if($user->getFacebookId()=="" && $user->getGoogleId()=="")
					{
	                    $body="F�licitation <strong>".$user->getNom()." ".$user->getPrenom()."</strong> ,<br>";
	                    $body.="Votre annonce <strong>".$annonce->getTitre()."</strong> a �t� ajout�e avec succ�es.<br> Merci d'avoir utiliser notre site.";
	                    $body.="<br><br> Cordialement Equipe nal9ach.com";
	                    $message = \Swift_Message::newInstance()
	                    ->setSubject('Equipe nal9ach.com')
	                    ->setTo($user->getEmail())
	                    ->setFrom($contact->getEmail())
	                    ->setContentType("text/html")
	                    ->setBody($body)
	                    ;
						$this->get('mailer')->send($message);
					};
                    //End mail 
                    $session->getFlashBag()->add('alert-success', 'Votre annonce été ajouté avec succées');
                    return $this->redirect($this->generateUrl("ajoutannonce"));
                }
            }
            catch (\Exception $ex)
            {
                $session->getFlashBag()->add('alert-error', $ex->getMessage());
            }
        }
        return $this->render('frontAnnonceBundle::ajout.html.twig', array('form' => $form->createView(), 'categories' => $categories));
    }

    public function ajaxAction()
    {
        $requies = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $id = $requies->get("id");
        $Region= $em->getRepository("adminLocBundle:Region")->find($id);
        $response = new JsonResponse();
        $villes = $em->getRepository("adminLocBundle:Ville")->findBy(
                                                                    array('region' => $Region), 
                                                                    array('libelle' => 'ASC')
                                                                );
        $tab = array();
        foreach ($villes as $ville)
            $tab[$ville->getId()] = $ville->getLibelle();
        $response->setData($tab);
        return $response;
    }

    public function listeAction()
    {
        $annonce = new Annonce();
        $session = $this->getRequest()->getSession();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository("frontAnnonceBundle:Annonce")->findByUser($user);
        return $this->render('frontAnnonceBundle::liste.html.twig', array('annonces' => $annonces));
    }

    public function annulerAction(Annonce $annonce)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $contact = $this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($annonce->getUser() == $user)
        {
            $annonce->setEtat(9);
            $em->persist($annonce);
            $em->flush();
			//Send Mail
					if($user->getFacebookId()=="" && $user->getGoogleId()=="")
					{
	                    $body="F�licitation <strong>".$user->getNom()." ".$user->getPrenom()."</strong> ,<br>";
	                    $body.="Votre annonce <strong>".$annonce->getTitre()."</strong> a �t� annul�e avec succ�es.<br> Merci d'avoir utiliser notre site.";
	                    $body.="<br><br> Cordialement Equipe nal9ach.com";
	                    $message = \Swift_Message::newInstance()
	                    ->setSubject('Equipe nal9ach.com')
	                    ->setTo($user->getEmail())
	                    ->setFrom($contact->getEmail())
	                    ->setContentType("text/html")
	                    ->setBody($body)
	                    ;
						$this->get('mailer')->send($message);
					};
            //End mail 
            $session->getFlashBag()->add('alert-success', 'Votre annonce été annulée avec succées');
        }
        else
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
        return $this->redirect($this->generateUrl("annonce_liste"));
    }
    public function reactiverAction(Annonce $annonce)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $contact = $this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($annonce->getUser() == $user)
        {
            $annonce->setEtat(1);
            $em->persist($annonce);
            $em->flush();
			//Send Mail
					if($user->getFacebookId()=="" && $user->getGoogleId()=="")
					{
	                    $body="F�licitation <strong>".$user->getNom()." ".$user->getPrenom()."</strong> ,<br>";
	                    $body.="Votre annonce <strong>".$annonce->getTitre()."</strong> a �t� r�activ�e avec succ�es.<br> Merci d'avoir utiliser notre site.";
	                    $body.="<br><br> Cordialement Equipe nal9ach.com";
	                    $message = \Swift_Message::newInstance()
	                    ->setSubject('Equipe nal9ach.com')
	                    ->setTo($user->getEmail())
	                    ->setFrom($contact->getEmail())
	                    ->setContentType("text/html")
	                    ->setBody($body)
	                    ;
						$this->get('mailer')->send($message);
					};
            //End mail 
            $session->getFlashBag()->add('alert-success', 'Votre annonce été r�activ�e avec succées');
        }
        else
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
        return $this->redirect($this->generateUrl("annonce_liste"));
    }

    public function editerAction(Annonce $annonce)
    {
        $ph1 = $annonce->getPhoto1();
        $ph2 = $annonce->getPhoto2();
        $ph3 = $annonce->getPhoto3();
        $ph4 = $annonce->getPhoto4();
		$contact = $this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $user = $this->container->get('security.context')->getToken()->getUser();
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("adminRefBundle:Categorie")->findAll();
        if ($annonce->getUser() == $user)
        {
            $form = $this->createForm(new AnnonceType(), $annonce);
            $request = $this->getRequest();
            if ($request->isMethod("POST"))
            {
                try
                {
                    $form->bind($request);
                    if ($form->isValid())
                    {
                        $annonce = $form->getData();
                        $annonce->setDateModification(new \DateTime("now"))
                                ->RemoveAllServices()
                                ->upload2($ph1, $ph2, $ph3, $ph4);
                        $services = $request->get("services");
                        for ($i = 0; $i < count($services); $i++)
                        {
                            $service = $em->getRepository("adminRefBundle:Service")->find($services[$i]);
                            $annonce->addService($service);
                        }
                        $em->persist($annonce);
                        $em->flush();
						//Send Mail
								if($user->getFacebookId()=="" && $user->getGoogleId()=="")
								{
									$body="F�licitation <strong>".$user->getNom()." ".$user->getPrenom()."</strong> ,<br>";
									$body.="Votre annonce <strong>".$annonce->getTitre()."</strong> a �t� modifi�e avec succ�es.<br> Merci d'avoir utiliser notre site.";
									$body.="<br><br> Cordialement Equipe nal9ach.com";
									$message = \Swift_Message::newInstance()
									->setSubject('Equipe nal9ach.com')
									->setTo($user->getEmail())
									->setFrom($contact->getEmail())
									->setContentType("text/html")
									->setBody($body)
									;
									$this->get('mailer')->send($message);
								};
						//End mail
                        $session->getFlashBag()->add('alert-success', 'Votre annonce été modifiée avec succées');
                        return $this->redirect($this->generateUrl("edit_annonce", array('id' => $annonce->getId())));
                    }
                }
                catch (\Exception $ex)
                {
                    $session->getFlashBag()->add('alert-error', $ex->getMessage());
                }
            }
            return $this->render('frontAnnonceBundle::editer.html.twig', array('annonce' => $annonce, 'form' => $form->createView(), 'categories' => $categories));
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
            return $this->redirect($this->generateUrl("annonce_liste"));
        }
    }

    public function delete1Action(Annonce $annonce)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($annonce->getUser() == $user)
        {
            if (file_exists($annonce->getUploadRootDir() . '/' . $annonce->getPhoto1()))
                unlink($annonce->getUploadRootDir() . '/' . $annonce->getPhoto1());
            $annonce->setPhoto1("");
            $em->persist($annonce);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Votre annonce été modifiée avec succées');
            return $this->redirect($this->generateUrl("edit_annonce", array('id' => $annonce->getId())));
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
            return $this->redirect($this->generateUrl("annonce_liste"));
        }
    }

    public function delete2Action(Annonce $annonce)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($annonce->getUser() == $user)
        {
            if (file_exists($annonce->getUploadRootDir() . '/' . $annonce->getPhoto2()))
                unlink($annonce->getUploadRootDir() . '/' . $annonce->getPhoto2());
            $annonce->setPhoto2("");
            $em->persist($annonce);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Votre annonce été modifiée avec succées');
            return $this->redirect($this->generateUrl("edit_annonce", array('id' => $annonce->getId())));
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
            return $this->redirect($this->generateUrl("annonce_liste"));
        }
    }

    public function delete3Action(Annonce $annonce)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($annonce->getUser() == $user)
        {
            if (file_exists($annonce->getUploadRootDir() . '/' . $annonce->getPhoto3()))
                unlink($annonce->getUploadRootDir() . '/' . $annonce->getPhoto3());
            $annonce->setPhoto3("");
            $em->persist($annonce);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Votre annonce été modifiée avec succées');
            return $this->redirect($this->generateUrl("edit_annonce", array('id' => $annonce->getId())));
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
            return $this->redirect($this->generateUrl("annonce_liste"));
        }
    }

    public function delete4Action(Annonce $annonce)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($annonce->getUser() == $user)
        {
            if (file_exists($annonce->getUploadRootDir() . '/' . $annonce->getPhoto4()))
                unlink($annonce->getUploadRootDir() . '/' . $annonce->getPhoto4());
            $annonce->setPhoto4("");
            $em->persist($annonce);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Votre annonce été modifiée avec succées');
            return $this->redirect($this->generateUrl("edit_annonce", array('id' => $annonce->getId())));
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
            return $this->redirect($this->generateUrl("annonce_liste"));
        }
    }

    public function commentairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $session = $this->getRequest()->getSession();
        $commentaires = $em->getRepository("frontAnnonceBundle:Commentaire")->nonLus($user);
        return $this->render('frontAnnonceBundle::commentaires.html.twig', array('commentaires' => $commentaires));
    }

    public function deletecommentAction(Commentaire $commentaire)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $session = $this->getRequest()->getSession();
        if ($commentaire->getAnnonce()->getUser() == $user)
        {
            $em->remove($commentaire);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Le commentaire été supprimée avec succées');
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
        }
        return $this->redirect($this->generateUrl("listecommentaires"));
    }

    public function luscommentAction(Commentaire $commentaire)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $session = $this->getRequest()->getSession();
        if ($commentaire->getAnnonce()->getUser() == $user)
        {
            $commentaire->setLus(TRUE);
            $em->persist($commentaire);
            $em->flush();
            $session->getFlashBag()->add('alert-success', 'Le commentaire été marqué comme lus avec succées');
        }
        else
        {
            $session->getFlashBag()->add('alert-error', 'Access Denies !!!');
        }
        return $this->redirect($this->generateUrl("listecommentaires"));
    }

}
