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
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
        ],

        [
            'brand' => 'Vapo',
            'model' => 'MousePick',
            'price' => 90,
        ],

        [
            'brand' => 'ELEAF',
            'model' => 'Pico S',
            'price' => 49,
        ],

        [
            'brand' => 'SMOK',
            'model' => 'Turn 2 - 70W',
            'price' => 40,
        ],

        [
            'brand' => 'VAPORESSO',
            'model' => 'Vape 7 - 100W',
            'price' => 90,
        ],

        [
            'brand' => 'Vapo',
            'model' => 'MousePick',
            'price' => 90,
        ]
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::VAPE as $vaper){
            $vape = new Vape();
            $vape->setBrand($vaper['brand']);
            $vape->setModel($vaper['model']);
            $vape->setPrice($vaper['price']);
            $manager->persist($vape);
        }
        $manager->flush();
    }
}
