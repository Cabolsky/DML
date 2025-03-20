<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new Contact();
        $contact->setTelephone('07 44 88 50 22')
                ->setEmail('dml.multiservices40@gmail.com');
        $manager->persist($contact);

        $manager->flush();
    }
}
