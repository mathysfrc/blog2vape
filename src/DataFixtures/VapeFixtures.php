<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vape;

class VapeFixtures extends Fixture
{
    public const VAPE = [
        [
            'brand' => 'ELEAF',
            'model' => 'Pico S',
            'price' => 49,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
            
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'Vapo',
            'model' => 'MousePick',
            'price' => 90,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'ELEAF',
            'model' => 'Pico S',
            'price' => 49,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ],

        [
            'brand' => 'Vapo',
            'model' => 'MousePick',
            'price' => 90,
            'height' => 116,
            'length' => 47,
            'width' => 23,
            'diametre' => 23,
            'contenance' => 4,
            'type' => 'Inhalation directe',
            'accu' => 18650,
            'puissance' => 75,
            'description' => "Le kit iStick Pico Plus est une cigarette électronique de petite taille, mais qui offre d\'excellentes performances. Fonctionnant avec un accu 18650, elle délivre une puissance de 75 watts et procure une vape plutôt aérienne avec son clearomiseur Melo 4S. Livré avec ses deux résistances EC-A de 0.30 Ω et 0.50 Ω, le kit iStick Pico Plus et le clearomiseur Melo 4S offre une vape savoureuse, avec une grande facilité d\'utilisation.
            Grâce à son fonctionnement avec accu, le kit iStick Pico Plus permet de vapoter plus longtemps avec un jeu d\'accus rechargeables. Un atout majeur pour votre journée de vape. La box iStick Plus bénéficie aussi d\'un design épuré qui associe ergonomie discrétion. Le kit est peu encombrant et pourtant son clearomiseur Melo 4S possède un beau diamètre de 25 mm.
            Le Melo 4S permet de vapoter 4 ml du e liquide de votre choix et son aération est polyvalente, avec une orientation vers l\'inhalation directe et la production de vapeur. Et les saveurs ne sont pas en reste grâce aux excellentes résistances EC-A composées d\'acier austénitique (AST). Ce nouveau résistif est durable et permet à la box Pico Plus de protéger la résistance lors de l\'absence de e liquide en mode ''Dry-Proof'",
        ]
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::VAPE as $vaper){
            $vape = new Vape();
            $vape->setBrand($vaper['brand']);
            $vape->setModel($vaper['model']);
            $vape->setPrice($vaper['price']);
            $vape->setHeight($vaper['height']);
            $vape->setLength($vaper['length']);
            $vape->setWidth($vaper['width']);
            $vape->setDiametre($vaper['diametre']);
            $vape->setContenance($vaper['contenance']);
            $vape->setType($vaper['type']);
            $vape->setAccu($vaper['accu']);
            $vape->setPuissance($vaper['puissance']);
            $vape->setDescription($vaper['description']);
            $manager->persist($vape);
        }
        $manager->flush();
    }
}
