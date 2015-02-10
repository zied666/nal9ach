<?php

namespace front\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use front\AnnonceBundle\Entity\Annonce;
use front\AnnonceBundle\Entity\AnnonceRepository;
use front\AnnonceBundle\Entity\Commentaire;
use front\AnnonceBundle\Form\CommentaireType;
use admin\RefBundle\Entity\Service;
use admin\LocBundle\Entity\Region;
use admin\LocBundle\Entity\Ville;

class DefaultController extends Controller
{

    public function showAction($titre, Annonce $annonce)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $commentaire = new Commentaire();
        $commentaire->setAnnonce($annonce)->setDateCreation(new \DateTime());
        if($user && $user==$annonce->getUser())
            $commentaire->setLus (true);
        else
            $commentaire->setLus (false);
        $form = $this->createForm(new CommentaireType(), $commentaire);
        $request = $this->getRequest();
        if ($request->isMethod("POST"))
        {
            $form->bind($request);
            if ($form->isValid())
            {
                $commentaire = $form->getData();
                $em->persist($commentaire);
                $em->flush();
                $session->getFlashBag()->add('alert-success', 'Votre commentaire a été ajouté avec succées');
                return $this->redirect($this->generateUrl("front_service_homepage", array('titre' => $annonce->GetUrl(), 'id' => $annonce->getId())));
            }
        }
        return $this->render('frontServiceBundle::show.html.twig', array('form' => $form->createView(), 'annonce' => $annonce));
    }

    public function listeAction($page, $region, $ville,$categorie, $service, $search, $orderby, $desc)
    {
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository("adminLocBundle:Region")->findBy(array(), array('libelle' => 'ASC'));
        $categories=$em->getRepository("adminRefBundle:Categorie")->findAll();
        $annonces = $em->getRepository("frontAnnonceBundle:Annonce")->filtre($page, $region, $ville,$categorie, $service, $search, $orderby, $desc);
        $count = $em->getRepository("frontAnnonceBundle:Annonce")->filtreCount($page, $region, $ville,$categorie, $service, $search, $orderby, $desc);
        $nbrpage=  ceil($count/20);
        if($nbrpage==0)
                $nbrpage=1;
        if($service!=0)
        {
            $SS= $em->getRepository("adminRefBundle:Service")->find($service);
            $categorie=$SS->getCategorie()->getId();
        }
            
        
        return $this->render('frontServiceBundle::liste.html.twig', array(
                    'annonces' => $annonces,
                    'page' => $page,
                    'region' => $region,
                    'ville' => $ville,
                    'categorie' => $categorie,
                    'service' => $service,
                    'search' => $search,
                    'orderby' => $orderby,
                    'desc' => $desc,
                    'regions'=>$regions,
                    'categories'=>$categories,
                    'count'=>$count,
                    'nbrpage'=>$nbrpage
                        )
        );
    }

    public function filtreAction($page, $region, $ville,$categorie, $service, $search, $orderby, $desc)
    {
        $request = $this->getRequest();
        if ($request->isMethod("POST"))
        {
            $page=1;
            if ($request->get('FiltreOrderBy') != NULL)
            {
                $date = explode('-', $request->get('FiltreOrderBy'));
                $orderby = $date[0];
                $desc = $date[1];
            }
            if ($request->get('FiltreSearch') != NULL)
            {
                $str = preg_replace('#[^\\p{L}\d]+#u', '_', $request->get('FiltreSearch'));
                $str = trim($str, '-');
                $str = iconv('utf-8', 'us-ascii//TRANSLIT', $str);
                $str = strtolower($str);
                $str = preg_replace('#[^-\w]+#', '', $str);
                $search = $str;
            }
            if ($request->get('RadioService') != NULL)
                $service = $request->get('RadioService');
            if ($request->get('RadioRegion') != NULL)
                $region = $request->get('RadioRegion');
        }
        return $this->redirect($this->generateUrl('liste_annonce', array(
                            'page' => $page,
                            'region' => $region,
                            'ville' => $ville,
                            'categorie' => $categorie,
                            'service' => $service,
                            'search' => $search,
                            'orderby' => $orderby,
                            'desc' => $desc,
        )));
    }

}
