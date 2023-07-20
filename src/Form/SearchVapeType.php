<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SearchVapeType extends AbstractType
{
    public const CATEGORIES = [
        'Tube' => 'Tube',
        'Pod' => 'Pod',
        'Jetable' => 'Jetable',
        'Box' => 'Box',
    ];

    public const BRAND = [
        'ELEAF' => 'ELEAF',
        'SMOK' => 'SMOK',
        'VAPORESSO' => 'VAPORESSO',
        'VAPO' => 'VAPO',
    ];

    public const FORK = [
        '0 - 30 €' => '0 - 30 €',
        '30 - 50 €' => '30 - 50 €',
        '50 - 80 €' => '50 - 80 €',
        '80 - 130 €' => '80 - 130 €',
        '+ 130 €' => '+ 130 €',
    ];


    public const WATT = [
        '0 - 30W' => '0 - 30W',
        '30 - 50W' => '30 - 50W',
        '50 - 80W' => '50 - 80W',
        '80 - 130W' => '80 - 130W',
        '+ 130W' => '+ 130W',
    ];


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod('GET')
            ->add('search', SearchType::class, [
                'required' => false,
                'label' => 'MOTS CLÉS',
                
            ])
            ->add('category', ChoiceType::class, [
                'choices' => self::CATEGORIES,
                'required' => false,
                'label' => 'CATEGORIES',
                
            ])
            ->add('brand', ChoiceType::class, [
                'choices' => self::BRAND,
                'required' => false,
                'label' => 'MARQUE',
                
            ])
            ->add('fork', ChoiceType::class, [
                'choices' => self::FORK,
                'required' => false,
                'label' => 'PRIX',
                
            ])
            ->add('watt', ChoiceType::class, [
                'choices' => self::WATT,
                'required' => false,
                'label' => 'PUISSANCE',
                
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
