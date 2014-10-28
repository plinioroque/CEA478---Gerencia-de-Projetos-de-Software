<?php

namespace Icea\CEA478\HelpDeskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelatoriosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('horaData')
            ->add('evento')
            ->add('chamada')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Icea\CEA478\HelpDeskBundle\Entity\Relatorios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icea_cea478_helpdeskbundle_relatorios';
    }
}
