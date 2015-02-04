<?php

namespace Icea\CEA478\HelpDeskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChamadasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('descricaoProblema', null, array('attr' => array('class' => 'form-control input-xlarge', 'rows' => '5')))
                ->add('chamadaLocal', null, array('attr' => array('class' => 'form-control')))
                ->add('chamadaCategoria', null, array('attr' => array('class' => 'form-control')))
                ->add('observacoes', null, array('attr' => array('class' => 'form-control input-xlarge', 'rows' => '3')))
                ->add('contatoAdicional1', null, array('attr' => array('class' => 'form-control input-xlarge')))
                ->add('contatoAdicional2', 'email', array('attr' => array('class' => 'form-control')))
                ->add('chamadaNivel', null, array('attr' => array('class'=>'form-control')))
                ->add('descricaoSolucao', null, array('attr' => array('class'=>'form-control')))
                ->add('chamadaStatus', null, array('attr' => array('class'=>'form-control')))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Icea\CEA478\HelpDeskBundle\Entity\Chamadas'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'icea_cea478_helpdeskbundle_chamadas';
    }

}
