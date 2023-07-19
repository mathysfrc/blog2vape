<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vape;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;

class VapeFixtures extends Fixture
{
    public const VAPE = [
        [
            'brand' => 'ELEAF',
            'model' => 'Pico S',
            'price' => 49,
            'fork' => '30 - 50 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '50 - 80W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Débutant'
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
            'fork' => '30 - 50 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '30 - 50W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",            
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Débutant'
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
            'fork' => '80 - 130 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '50 - 80W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Débutant'
        ],

        [
            'brand' => 'VAPO',
            'model' => 'MousePick',
            'price' => 90,
            'fork' => '80 - 130 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '50 - 80W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Expert'
        ],

        [
            'brand' => 'ELEAF',
            'model' => 'Pico S',
            'price' => 49,
            'fork' => '30 - 50 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '50 - 80W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Expert'
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
            'fork' => '30 - 50 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '30 - 50W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Expert'
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
            'fork' => '80 - 130 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '50 - 80W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Intermédiaire'
        ],

        [
            'brand' => 'VAPO',
            'model' => 'MousePick intermédiaire',
            'price' => 90,
            'fork' => '80 - 130 €',
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'watt' => '30 - 50W',
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",  
            'link' => 'https://www.lepetitvapoteur.com/fr/blog/test-du-kit-pico-s-de-eleaf-et-du-clearomiseur-ello-vate-n418', 'category' => 'Intermédiaire'
            ]
    ];

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

    public function load(ObjectManager $manager): void
    {
        foreach (self::VAPE as $vaper){
            $vape = new Vape();
            $vape->setBrand(self::BRAND[array_rand(self::BRAND)]);
            $vape->setModel($vaper['model']);
            $vape->setPrice($vaper['price']);
            $vape->setFork(self::FORK[array_rand(self::FORK)]);
            $vape->setHeight($vaper['height']);
            $vape->setLength($vaper['length']);
            $vape->setWidth($vaper['width']);
            $vape->setDiametre($vaper['diametre']);
            $vape->setContenance($vaper['contenance']);
            $vape->setType($vaper['type']);
            $vape->setAccu($vaper['accu']);
            $vape->setPuissance($vaper['puissance']);
            $vape->setWatt(self::WATT[array_rand(self::WATT)]);
            $vape->setDescription($vaper['description']);
            $vape->setLink($vaper['link']);
            $vape->setCategory(self::CATEGORIES[array_rand(self::CATEGORIES)]);
            $manager->persist($vape);
        }
        $manager->flush();
    }
}
