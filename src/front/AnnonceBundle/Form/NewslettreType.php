<?php

namespace front\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewslettreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email','email',array('attr'=>array('placeholder'=>'Entrez votre adresse e-mail ')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'front\AnnonceBundle\Entity\Newslettre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_annoncebundle_newslettre';
    }
}
