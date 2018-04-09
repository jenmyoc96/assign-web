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
        $c1->setDate(new DateTime('2017-01-01'));
        $manager->persist($c1);

//        $c1 = new Chocolate();
//        $c1->setProductName('');
//        $c1->setDescription('');
//        $c1->setIngrediants('');
//        $c1->setPhoto('');
//        $c1->setPrice('');
//        $c1->setReviewby('');
//        $c1->setDate('');
//        $manager->persist($c1);
//

        $manager->flush();
    }
}