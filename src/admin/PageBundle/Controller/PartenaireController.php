<?php

namespace admin\PageBundle\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\PageBundle\Entity\Partenaire;
use admin\PageBundle\Form\PartenaireType;

class PartenaireController extends Controller
{
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session= $this->getRequest()->getSession();
        $partenaire = new Partenaire();
        $form=$this->createForm(new PartenaireType(), $partenaire);
        $partenaires=$em->getRepository('adminPageBundle:Partenaire')->findAll();
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $partenaire=$form->getData();
                $partenaire->upload();
                $em->persist($partenaire);
                $em->flush();
                $session->getFlashBag()->add('alert-success','Partenaire a été modifié avec succées');
                return $this->redirect($this->generateUrl("Partenaire"));
            }
        }
        return $this->render('adminPageBundle::partenaire.html.twig',array('form'=>$form->createView(),'partenaires'=>$partenaires));
    }
    
    
    public function supprAction(Partenaire $partenaire)
    {
        $em=  $this->getDoctrine()->getManager();
        $session=  $this->getRequest()->getSession();
        try{
        unlink ($partenaire->getUploadRootDir ().'/'.$partenaire->getLogo());
        $em->remove($partenaire);
        $em->flush();
        $session->getFlashBag()->add('alert-success','Partenaire a été supprimé avec succées');
        } catch(\Exception $ex){
            $session->getFlashBag()->add('alert-error', $ex->getMessage()); 
        }
         return $this->redirect($this->generateUrl("Partenaire"));
    }
}
