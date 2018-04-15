<?php

namespace App\DataFixtures;

use App\Entity\Chocolate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use DateTime;
class LoadChocolates extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Chocolate();
        $c1->setProductName('Crunchie');
        $c1->setDescription('A crunchy chocolate bar');
        $c1->setIngrediants('honey comb and milk chocolate');
        $c1->setPhoto('c1.png');
        $c1->setPrice('1');
        $c1->setReviewby('Jenny');
        $c1->setDate(new DateTime(2017-01-01));
        $manager->persist($c1);

       $c2 = new Chocolate();
       $c2->setProductName('Curly whurly');
       $c2->setDescription('a curly bar');
       $c2->setIngrediants('caramel and chocolate');
       $c2->setPhoto('c2.png');
       $c2->setPrice('2');
       $c2->setReviewby('joanne');
       $c2->setDate(new DateTime(2017-01-06));
       $manager->persist($c2);


        $manager->flush();
    }
}