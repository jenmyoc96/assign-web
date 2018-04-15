<?php

namespace App\Form;

use App\Entity\Chocolate;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('category', EntityType::class, [
                // list objects from this class
                'class' => 'App:Category',
                // use the 'Category.name' property as the visible option string
                'choice_label' => 'name',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chocolate::class,
        ]);
    }
}
