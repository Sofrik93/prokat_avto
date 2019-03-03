<?php

namespace AppBundle\Form;

use mysql_xdevapi\Collection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('markaAvto',EntityType::class,
                [
                  'class'=>'AppBundle\Entity\Procat_info',
                  'placeholder'=>'Выберете марку авто',
                  'choice_label'=>'markaAvto'
                ])
            ->add('modelAvto',EntityType::class,
                [
                'class'=>'AppBundle\Entity\Procat_info',
                'placeholder'=>'Выберете модель авто',
                'choice_label'=>'modelAvto'
                ])
            ->add('numberAvto',EntityType::class,
                [
                    'class'=>'AppBundle\Entity\Procat_info',
                    'placeholder'=>'Выберете номер авто',
                    'choice_label'=>'numberAvto'
                ]);
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Procat_info'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_procat_info';
    }


}
