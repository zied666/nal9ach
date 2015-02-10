<?php

namespace admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\UserBundle\Form\Type\RegistrationFormType;
use admin\UserBundle\Entity\User;
class DefaultController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $user = new user();
        $form=  $this->createForm(new RegistrationFormType, $user);
        
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $user= new user();
                $user=$form->getData();
                
                //Verifier email existe ou non
                $Verif= $em->getRepository("adminUserBundle:User")->findByemail($user->getEmail());
                if(count($Verif)!=0)
                {
                    $session->getFlashBag()->add('alert-error', $user->getEmail()." existe déja !!! "); 
                    return $this->render('adminUserBundle:Default:ajout.html.twig',array('form'=>$form->createView()));
                }
                //Verifier username existe ou non
                $Verif= $em->getRepository("adminUserBundle:User")->findByusername($user->getUsername());
                if(count($Verif)!=0)
                {
                    $session->getFlashBag()->add('alert-error', $user->getUsername()." existe déja !!! "); 
                    return $this->render('adminUserBundle:Default:ajout.html.twig',array('form'=>$form->createView()));
                }
                
                $user->addRole("ROLE_ADMIN");
                $em->persist($user);
                $em->flush();
                $session->getFlashBag()->add('alert-success','l\'utilisateur a été modifié avec succées');
                return $this->redirect($this->generateUrl("listeUser"));
            }
        }
        return $this->render('adminUserBundle:Default:ajout.html.twig',array('form'=>$form->createView()));
    }
    
    
    public function editAction(user $user)
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $form=  $this->createForm(new RegistrationFormType, $user);
        $form->remove('plainPassword');
        $form->add('username','text',array('read_only'=>true));
        $form->add('email','text',array('read_only'=>true));
        $form->remove('Enregistrer', 'submit');
        $form->add('Modifier', 'submit');
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $user= new user();
                $user=$form->getData();
                $user->addRole("ROLE_ADMIN");
                $em->persist($user);
                $em->flush();
                $session->getFlashBag()->add('alert-success','les commissions ont été modifié avec succées');
                return $this->redirect($this->generateUrl("listeUser"));
            }
        }
        return $this->render('adminUserBundle:Default:edit.html.twig',array('form'=>$form->createView()));
    }
    
    
    public function deleteAction(user $user)
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        try
        {
            $em->remove($user);
            $em->flush();
            $session->getFlashBag()->add('alert-success', $user->getNom().' a été supprimé avec succées');
         } catch(\Exception $ex){
            $session->getFlashBag()->add('alert-error', $ex->getMessage()); 
        }
        return $this->redirect($this->generateUrl("otherUser"));
    }
    
    
    
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $Users=$this->findByRole("ROLE_ADMIN");
        return $this->render('adminUserBundle:Default:liste.html.twig',array('Users'=>$Users));
    }
    
    
    public function otherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        $Users=$em->getRepository("adminUserBundle:User")->findAll();
        return $this->render('adminUserBundle:Default:other.html.twig',array('Users'=>$Users));
    }
    
    public function etatAction(user $user)
    {
        $em = $this->getDoctrine()->getManager();
        $session =$this->getRequest()->getSession();
        if($user->isEnabled())
           $user->setEnabled(FALSE);
        else
            $user->setEnabled(TRUE);
        $em->persist($user);
        $em->flush();
        $session->getFlashBag()->add('alert-success', $user->getNom().' a été modifié avec succées');
        return $this->redirect($this->generateUrl("listeUser"));
    }
    
    public function findByRole($role) {
    $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
            $qb->select('u')
            ->from('adminUserBundle:User','u')
            ->where('u.roles LIKE :roles')
            ->setParameter('roles', '%"' . $role . '"%');
    return $qb->getQuery()->getResult();
}
    
}
