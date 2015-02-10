<?php

namespace front\AnnonceBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
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
                ->add('prix')
                ->add('tel1')
                ->add('tel2')
                ->add('email')
                ->add('adresse', 'text')
                ->add('region', 'entity', array(
                    'class' => 'adminLocBundle:Region',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.libelle', 'ASC');
                    },
                    'empty_value' => 'Choisissez la région',
                    'empty_data' => null
                ))
                ->add('ville')
                ->add('photo1', 'file', array(
                    'data_class' => null,
                    'required' => false
                ))
                ->add('photo2', 'file', array(
                    'data_class' => null,
                    'required' => false
                ))
                ->add('photo3', 'file', array(
                    'data_class' => null,
                    'required' => false
                ))
                ->add('photo4', 'file', array(
                    'data_class' => null,
                    'required' => false
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'front\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_annoncebundle_annonce';
    }

}
