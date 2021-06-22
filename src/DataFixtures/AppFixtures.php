<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager) {

        for($i = 0; $i <= 20; $i++){
            $product = new Product();
                $product->setName('Product'. $i);
                $product->setPrice($i*rand(5, 50));
                $product->setImage("https://via.placeholder.com/150");
                $product->setDescription("Description" .$i);
            $manager->persist($product);

        }
        $manager->flush();
    }
}
