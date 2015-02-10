<?php

namespace front\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{

    public function countannonceAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $annonces=$this->getDoctrine()->getManager()->getRepository("frontAnnonceBundle:Annonce")->findByUser($user);
        
        return new Response(count($annonces));
    }
    public function countcommentaireAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $commentaires = $this->getDoctrine()->getManager()->getRepository("frontAnnonceBundle:Commentaire")->nonLus($user);
        return new Response(count($commentaires));
    }

}
