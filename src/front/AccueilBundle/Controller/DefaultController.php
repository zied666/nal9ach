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
        $em=$this->getDoctrine()->getManager();
        $accueil=new Accueil();
        $categories=$em->getRepository("adminRefBundle:Categorie")->findAll();
        $marketing=$em->getRepository("adminPageBundle:Marketing")->find(1);
        $accueil=$em->getRepository('adminPageBundle:Accueil')->find(1);
        $GrandTunis=$em->getRepository("adminLocBundle:Region")->find(36);
        $regions=$em->getRepository("adminLocBundle:Region")->findBy(array(), array('libelle'=>'ASC'), 11);
        $regions2=$em->getRepository("adminLocBundle:Region")->findBy(array(), array('libelle'=>'ASC'), 10, 11);
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
            return $this->render('frontAccueilBundle:Default:accueil2.html.twig', array('marketing'=>$marketing, 'accueil'=>$accueil, 'GrandTunis'=>$GrandTunis, 'regions'=>$regions, 'regions2'=>$regions2, 'categories'=>$categories));
        else
            return $this->render('frontAccueilBundle:Default:accueil.html.twig', array('marketing'=>$marketing, 'accueil'=>$accueil, 'GrandTunis'=>$GrandTunis, 'regions'=>$regions, 'regions2'=>$regions2, 'categories'=>$categories));
    }

    public function profileAction()
    {
        $em=$this->getDoctrine()->getManager();
        $session=$this->getRequest()->getSession();
        $user=$this->container->get('security.context')->getToken()->getUser();
        $form=$this->createForm(new RegistrationFormType, $user);
        $form->remove('plainPassword');
        $form->add('username', 'text', array('read_only'=>true));
        $form->add('email', 'text', array('read_only'=>true));
        $form->remove('Enregistrer', 'submit');
        $form->add('Modifier', 'submit', array('attr'=>array('class'=>'btn btn-primary bold')));
        $request=$this->getRequest();
        if($request->isMethod("POST"))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $user=new user();
                $user=$form->getData();
                $user->addRole("ROLE_ADMIN");
                $em->persist($user);
                $em->flush();
                $session->getFlashBag()->add('alert-success', 'Votre profile a été modifié avec succées');
                return $this->redirect($this->generateUrl("monprofile"));
            }
        }
        return $this->render('frontAccueilBundle:Default:monprofile.html.twig', array('form'=>$form->createView()));
    }

    public function contactAction()
    {
        $contact=$this->getDoctrine()->getRepository("adminPageBundle:contact")->find(1);
        $session=$this->getRequest()->getSession();
        $request=$this->getRequest();
        if($request->isMethod("post")&&$request->get("nom")!=null&&$request->get("email")!=null&&$request->get("texte")!=null)
        {
            $body="Salut, vous avez réçus un message contact :<br>";
            $body.="<br> <strong> Nom & prénom </strong> :  ".$request->get("nom");
            $body.="<br> <strong> Tel </strong> :  ".$request->get("tel");
            $body.="<br> <strong> Email </strong> :  ".$request->get("email");
            $body.="<br> <strong> Message </strong> :  <br>".$request->get("texte");
            $body.="<br><br> Cordialement Equipe nal9ach.com";
            $message=\Swift_Message::newInstance()
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




        return $this->render('frontAccueilBundle:Default:contact.html.twig', array('contact'=>$contact));
    }

    public function quisommesnousAction()
    {
        return $this->render('frontAccueilBundle:Default:quisommesnous.html.twig');
    }

}
