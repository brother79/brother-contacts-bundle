<?php

namespace Brother\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('emain')
            ->add('message')
            ->add('created_at')
            ->add('updated_at')
            ->add('deleted_at')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Brother\ContactsBundle\Entity\Entry'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'brother_contactsbundle_entry';
    }
}
