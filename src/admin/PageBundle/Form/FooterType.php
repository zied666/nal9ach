<?php

namespace admin\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FooterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('texte')
            ->add('titre2')
            ->add('text2','textarea')
            ->add('facebook','url')
            ->add("Modifier","submit")
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'admin\PageBundle\Entity\Footer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_pagebundle_footer';
    }
}
