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
        'Débutant' => 'Débutant',
        'Intermédiaire' => 'Intermédiaire',
        'Expert' => 'Expert',
    ];

    public const BRAND = [
        'ELEAF' => 'ELEAF',
        'SMOK' => 'SMOK',
        'VAPORESSO' => 'VAPORESSO',
        'VAPO' => 'VAPO',
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
