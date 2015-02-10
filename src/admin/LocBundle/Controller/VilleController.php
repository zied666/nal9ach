<?php

namespace admin\LocBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use admin\LocBundle\Entity\Ville;
use admin\LocBundle\Form\VilleType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Ville controller.
 *
 */
class VilleController extends Controller
{

    /**
     * Lists all Ville entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminLocBundle:Ville')->findAll();

        return $this->render('adminLocBundle:Ville:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Ville entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ville();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ville_show', array('id' => $entity->getId())));
        }

        return $this->render('adminLocBundle:Ville:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ville entity.
     *
     * @param Ville $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ville $entity)
    {
        $form = $this->createForm(new VilleType(), $entity, array(
            'action' => $this->generateUrl('ville_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ville entity.
     *
     */
    public function newAction()
    {
        $entity = new Ville();
        $form = $this->createCreateForm($entity);

        return $this->render('adminLocBundle:Ville:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ville entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Ville')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Ville entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('adminLocBundle:Ville:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ville entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Ville')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Ville entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('adminLocBundle:Ville:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Ville entity.
     *
     * @param Ville $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Ville $entity)
    {
        $form = $this->createForm(new VilleType(), $entity, array(
            'action' => $this->generateUrl('ville_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Ville entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Ville')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Ville entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid())
        {
            $em->flush();

            return $this->redirect($this->generateUrl('ville_edit', array('id' => $id)));
        }

        return $this->render('adminLocBundle:Ville:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ville entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        $session =$this->getRequest()->getSession();
        try
        {
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('adminLocBundle:Ville')->find($id);

                if (!$entity)
                {
                    throw $this->createNotFoundException('Unable to find Ville entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }
        catch (\Exception $ex)
        {
            $session->getFlashBag()->add('alert-error', $ex->getMessage());
        }
        return $this->redirect($this->generateUrl('ville'));
    }

    /**
     * Creates a form to delete a Ville entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ville_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function ajaxAction()
    {
        $requies=  $this->getRequest();
        $id=$requies->get("id");
        $response = new JsonResponse();
        $villes=  $this->getDoctrine()->getManager()->getRepository("adminLocBundle:Ville")->findBy(array('region'=>$id));
        foreach ($villes as $ville)
        {
            $response->setData(array($ville['id']=>$ville['libelle']));
        }
        
        
        
        
        return $response;
    }

}
