<?php

namespace admin\LocBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use admin\LocBundle\Entity\Region;
use admin\LocBundle\Form\RegionType;
use \Symfony\Component\HttpFoundation\Response;
/**
 * Region controller.
 *
 */
class RegionController extends Controller
{

    /**
     * Lists all Region entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminLocBundle:Region')->findAll();

        return $this->render('adminLocBundle:Region:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Region entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Region();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('region_show', array('id' => $entity->getId())));
        }

        return $this->render('adminLocBundle:Region:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Region entity.
     *
     * @param Region $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Region $entity)
    {
        $form = $this->createForm(new RegionType(), $entity, array(
            'action' => $this->generateUrl('region_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Region entity.
     *
     */
    public function newAction()
    {
        $entity = new Region();
        $form   = $this->createCreateForm($entity);

        return $this->render('adminLocBundle:Region:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Region entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Region')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Region entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('adminLocBundle:Region:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Region entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Region')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Region entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('adminLocBundle:Region:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Region entity.
    *
    * @param Region $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Region $entity)
    {
        $form = $this->createForm(new RegionType(), $entity, array(
            'action' => $this->generateUrl('region_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Region entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminLocBundle:Region')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Region entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('region_edit', array('id' => $id)));
        }

        return $this->render('adminLocBundle:Region:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Region entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        try{
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        $session =$this->getRequest()->getSession();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminLocBundle:Region')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Region entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
         } catch(\Exception $ex){
            $session->getFlashBag()->add('alert-error', $ex->getMessage()); 
        }
        return $this->redirect($this->generateUrl('region'));
    }

    /**
     * Creates a form to delete a Region entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('region_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
    public function ajaxAction()
    {
       $request=$this->getRequest();
       $region = new Region();
       $region=  $this->getDoctrine()->getManager()->getRepository('adminLocBundle:Region')->find($request->get('id'));
       return new Response($region->getLibelle());
    }
}
