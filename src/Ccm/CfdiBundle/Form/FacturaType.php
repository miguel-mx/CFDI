<?php

namespace Ccm\CfdiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lugarExpedicion')
            ->add('folio')
            ->add('fecha')
            ->add('formaPago')
            ->add('tipoComprobante')
            ->add('numeroCertificado')
            ->add('subTotal')
            ->add('total')
            ->add('emisorRfc')
            ->add('emisorNombre')
            ->add('emisorCalle')
            ->add('emisorNumExterior')
            ->add('emisorColonia')
            ->add('emisorMunicipio')
            ->add('emisorEstado')
            ->add('emisorPais')
            ->add('emisorCp')
            ->add('receptorRfc')
            ->add('receptorNombre')
            ->add('receptorCalle')
            ->add('receptorNumExterior')
            ->add('receptorColonia')
            ->add('receptorMunicipio')
            ->add('receptorEstado')
            ->add('receptorPais')
            ->add('receptorCp')
            ->add('totalImpuestoTrasladado')
            ->add('impuesto')
            ->add('tasa')
            ->add('importe')
            ->add('uuid')
            ->add('fechaTimbrado')
            ->add('fechaCreacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ccm\CfdiBundle\Entity\Factura'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ccm_cfdibundle_factura';
    }
}
