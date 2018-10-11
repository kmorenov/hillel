<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 9/10/18
 * Time: 6:42 PM
 */

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle('title ' . $i);
            $article->setContent('content' . $i);
            $article->setCreatedAt(new \DateTime('now'));
            $article->setCategory(1);
            $manager->persist($article);
        }

        $manager->flush();
    }
}

