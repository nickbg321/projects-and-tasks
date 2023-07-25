<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\DataFixtures\Story\ProjectStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ProjectStory::load();
    }
}
