<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Procat_infoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientFirst', null, ['label'=>'Фамилия'])
            ->add('clientLast', null, ['label'=>'Имя'])
            ->add('clientOch', null, ['label'=>'Очество'])
            ->add('markaAvto', null, ['label'=>'Марка авто'])
            ->add('modelAvto', null, ['label'=>'Модель авто'])
            ->add('numberAvto', null, ['label'=>'Номер авто'])
            ->add('tochka', null, ['label'=>'Точка проката'])
            ->add('dataGo', null, ['label'=>'Дата взятия в прокат'])
            ->add('dataFinish', null, ['label'=>'Дата возврата в прокат']);
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
