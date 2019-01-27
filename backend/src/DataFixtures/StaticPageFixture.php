<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\StaticPage;

class StaticPageFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $staticPage = new StaticPage();
        $staticPage->setSlug('about');
        $staticPage->setTitle('About project - Health-Diary');
        $staticPage->setDescription('Health-Diary - a project that helps you to 
            find good and bad influences on your health.');

        $text = "
            <p>It\'s all about controlling what happens in your life 
               and how it reflects on your health. </p>
            <p>The main idea that you can make evening notes every 
               day and write what did you eat and how you feel now. 
               It should be simple, so we decided to use just questionary 
               for all things and later you can add your own questions/answers. 
               When it has enough data, second part of application will be able to 
               find different correlation between food and feeling, 
               or even not only food, but whatever you decide to put there: 
               activities, habits, psy state, etc.</p>
        ";

        $staticPage->setBody($text);
        $staticPage->setEnabled(true);
        $staticPage->setCreatedAt(new \DateTime());
        $staticPage->setUpdatedAt(new \DateTime());

        $manager->persist($staticPage);
        $manager->flush();
    }
}
