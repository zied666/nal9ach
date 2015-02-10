<?php

namespace admin\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MarketingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('banniere', 'file', array(
                'data_class' => null,
                'required'=>false
            ))
            ->add('photo1', 'file', array(
                'data_class' => null,
                'required'=>false
            ))
            ->add('photo2', 'file', array(
                'data_class' => null,
                'required'=>false
            ))
            ->add('Enregistrer','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'admin\PageBundle\Entity\Marketing'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_pagebundle_marketing';
    }
}
