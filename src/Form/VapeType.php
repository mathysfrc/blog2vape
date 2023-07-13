<?php

namespace App\Form;

use App\Entity\Vape;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand')
            ->add('model')
            ->add('price')
            ->add('height')
            ->add('length')
            ->add('width')
            ->add('diametre')
            ->add('contenance')
            ->add('type')
            ->add('accu')
            ->add('puissance')
            ->add('description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vape::class,
        ]);
    }
}
