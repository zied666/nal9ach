<?php

namespace admin\PageBundle\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\PageBundle\Entity\Slider;
use admin\PageBundle\Form\SliderType;

class SliderController extends Controller
{
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session= $this->getRequest()->getSession();
        $slider = new Slider();
        $form=$this->createForm(new SliderType(), $slider);
        $sliders=$em->getRepository('adminPageBundle:Slider')->findAll();
        $request=  $this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $contact=$form->getData();
                $contact->upload();
                $em->persist($contact);
                $em->flush();
                $session->getFlashBag()->add('alert-success','Slider a été modifié avec succées');
                return $this->redirect($this->generateUrl("SLider"));
            }
        }
        return $this->render('adminPageBundle::slider.html.twig',array('form'=>$form->createView(),'sliders'=>$sliders));
    }
    
    
    public function supprAction(Slider $slider)
    {
        $em=  $this->getDoctrine()->getManager();
        $session=  $this->getRequest()->getSession();
        try{
        unlink ($slider->getUploadRootDir ().'/'.$slider->getPhoto());
        $em->remove($slider);
        $em->flush();
        $session->getFlashBag()->add('alert-success','Slider a été supprimé avec succées');
        } catch(\Exception $ex){
            $session->getFlashBag()->add('alert-error', $ex->getMessage()); 
        }
         return $this->redirect($this->generateUrl("SLider"));
    }
}
