<?php

namespace App\DataFixtures;

use App\Entity\VapeCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VapeCategoryFixtures extends Fixture
{

    public const CATEGORIES = [
        [
            'name' => 'Stop Cigarette', 'code' => 'stop'
        ],
        [
            'name' => 'Medium', 'code' => 'medium'
        ],
        [
            'name' => 'Grosse fumée', 'code' => 'smoke'
        ]
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $category){
            $vapeCategory = new VapeCategory();
            $vapeCategory -> setName($category['name']);
            $manager->persist($vapeCategory);
            $this->addReference('category_' . $category['code'], $vapeCategory);

        }

        $manager->flush();
    }
}
