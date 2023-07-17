<?php

namespace App\Form;

use App\Entity\Vape;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class VapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', TextType::class, [
                'label' => 'Marque',
                'attr' => [
                    'placeholder' => 'Entrer la marque'
                ]
            ])

            ->add('model', TextType::class, [
                'label' => 'Modèle',
                'attr' => [
                    'placeholder' => 'Entrer le modèle'
                ]
            ])

            ->add('price', IntegerType::class, [
                'label' => 'Prix',
                'attr' => [
                    'placeholder' => 'Entrer le prix'
                ]
            ])
            ->add('height', IntegerType::class, [
                'label' => 'Hauteur',
                'attr' => [
                    'placeholder' => 'Entrer la hauteur en mm'
                ]
            ])
            ->add('length', IntegerType::class, [
                'label' => 'Longueur',
                'attr' => [
                    'placeholder' => 'Entrer la longueur en mm'
                ]
            ])
            ->add('width', IntegerType::class, [
                'label' => 'Largeur',
                'attr' => [
                    'placeholder' => 'Entrer la largeur en mm'
                ]
            ])
            ->add('diametre', IntegerType::class, [
                'label' => 'Dimaètre',
                'attr' => [
                    'placeholder' => 'Entrer le diamètre en mm'
                ]
            ])
            ->add('contenance', IntegerType::class, [
                'label' => 'Contenance',
                'attr' => [
                    'placeholder' => 'Entrer la contenance en ml'
                ]
            ])
            ->add('type', TextType::class, [
                'label' => 'Type d\'inhalation',
                'attr' => [
                    'placeholder' => 'Entrer le type d\'inhalation'
                ]
            ])
            ->add('accu', IntegerType::class, [
                'label' => 'Accu',
                'attr' => [
                    'placeholder' => 'Entrer la référence de l\'accu'
                ]
            ])
            ->add('puissance', IntegerType::class, [
                'label' => 'Puissance',
                'attr' => [
                    'placeholder' => 'Entrer la puissance'
                ]
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Entrer la description de la vape'
                ]
            ])
            ->add('posterFile', VichFileType::class, [
                'required'      => false,
                'allow_delete'  => true, 
                'download_uri' => true,
                'label'  => 'Photo de la vape'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vape::class,
        ]);
    }
}
