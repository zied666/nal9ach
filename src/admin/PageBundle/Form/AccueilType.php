<?php

namespace admin\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccueilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('logo', 'file', array(
                'data_class' => null,
                'required'=>false
            ))
            ->add('facebook','url', array(
                'required'=>false
            ))
            ->add('twitter','url', array(
                'required'=>false
            ))
            ->add('googleplus','url', array(
                'required'=>false
            ))
            ->add('linkedin','url', array(
                'required'=>false
            ))
            ->add('text1')
            ->add('text2')
            ->add('Enregistrer','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'admin\PageBundle\Entity\Accueil'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_pagebundle_accueil';
    }
}
