<?php

namespace App\Form;

use App\Entity\Chocolate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChocolateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName')
            ->add('ingrediants')
            ->add('description')
            ->add('photo')
            ->add('price')
            ->add('reviewby')
            ->add('date')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chocolate::class,
        ]);
    }
}
