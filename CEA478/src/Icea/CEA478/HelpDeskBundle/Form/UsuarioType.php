<?php

namespace Icea\CEA478\HelpDeskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome',null, array('attr' => array('class' => 'form-control input-xlarge')))
            ->add('username','email', array('attr' => array('class' => 'form-control input-xlarge')))
            ->add('telefone',null, array('attr' => array('class' => 'form-control input-xlarge')))
            ->add('password','password', array('attr' => array('class' => 'form-control input-xlarge')))
            ->add('usuarioClasse',null, array('attr' => array('class' => 'form-control','required'=>'required')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Icea\CEA478\HelpDeskBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icea_cea478_helpdeskbundle_usuario';
    }
}
