<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Map;
use Faker\Factory;

class MapFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {

        $map = new Map();
        $map->setLatitude($faker->latitude(42, 52));
        $map->setLongitude($faker->longitude(-3, 7));
        $manager->persist($map);
        $manager->flush();
    }
}
}
