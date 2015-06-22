<?php

namespace Ccm\CfdiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ccm\CfdiBundle\Entity\Factura;
use Ccm\CfdiBundle\Form\FacturaType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormView;

/**
 * Factura controller.
 *
 * @Route("/cfdi")
 */
class FacturaController extends Controller
{

    /**
     * Carga archivo de factura
     *
     * @Route("/xml", name="_xml")
     * @Template()
     *
     */
    public function uploadAction(Request $request)
    {
        //$defaultData = array('message' => 'Carga archivo XML');

        $form = $this->createFormBuilder()
            ->add('archivos', 'file', array('multiple' => TRUE))
            // ->add('archivo', 'file')
            ->add('send', 'submit', array('attr' => array('label'  => 'Cargar Archivo', 'class' => 'btn btn-primary')) )
            ->getForm();

        $formView = $form->createView();
        $formView->children['archivos']->vars = array_replace($formView->children['archivos']->vars, array('full_name', 'form[archivos][]'));


        $form->handleRequest($request);

        if ($form->isValid()) {

            //individual
            //$archivo = $form['archivo']->getData();

            $archivos = $form['archivos']->getData(); // multiple

            foreach($archivos as $archivo) {

                $factura = new Factura();

                $extension = $archivo->guessExtension();

                if ($extension == "xml") { // check if the file extension is as required; you can also check the mime type itself: $file->getMimeType()

                    $content = file_get_contents($archivo->getPathname());

                    $factura->loadXml($content);
                    $factura->setNombreArchivo($archivo->getClientOriginalName());

                    //TODO: Valida que no exista la factura

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($factura);
                    $em->flush();

                    $this->addFlash(
                        'notice',
                        $archivo->getClientOriginalName()
                    );

                } else {

                    $this->addFlash(
                        'error',
                        $archivo->getClientOriginalName()
                    );

                    /* Archivo individual

                    return array(
                        'form' => $form->createView(),
                    ); */
                }
            }

            // Muestra la nueva factura Individual
            // return $this->redirect($this->generateUrl('_show', array('id' => $factura->getId())));

            // Vista de archivos cargados

        }

        return array(
            'form'   => $formView,
        );

    }

    /**
     * Lists all Factura entities.
     *
     * @Route("/", name="")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CcmCfdiBundle:Factura')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Factura entity.
     *
     * @Route("/", name="_create")
     * @Method("POST")
     * @Template("CcmCfdiBundle:Factura:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Factura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Factura entity.
     *
     * @param Factura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Factura $entity)
    {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Factura entity.
     *
     * @Route("/new", name="_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Factura();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Factura entity.
     *
     * @Route("/{id}", name="_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CcmCfdiBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Factura entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CcmCfdiBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Factura entity.
    *
    * @param Factura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Factura $entity)
    {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Factura entity.
     *
     * @Route("/{id}", name="_update")
     * @Method("PUT")
     * @Template("CcmCfdiBundle:Factura:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CcmCfdiBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Factura entity.
     *
     * @Route("/{id}", name="_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CcmCfdiBundle:Factura')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Factura entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl(''));
    }

    /**
     * Creates a form to delete a Factura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }

}
