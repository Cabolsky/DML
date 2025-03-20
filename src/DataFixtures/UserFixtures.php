<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new Admin();
        $admin->setUsername('admin'); // Remplace l'email par un identifiant
        $admin->setRoles(['ROLE_ADMIN']);
    
        $hashedPassword = $this->passwordHasher->hashPassword($admin, '12345');
        $admin->setPassword($hashedPassword);
    
        $manager->persist($admin);
        $manager->flush();
    }
    
}
