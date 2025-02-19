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
        $contact->setTelephone('07 85 87 84 25')
                ->setEmail('CONTACT@DML.FR');
        $manager->persist($contact);

        $manager->flush();
    }
}
