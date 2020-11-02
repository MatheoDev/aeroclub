<?php


namespace App\DataFixtures;


use App\Entity\Membres;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Membres();
        $user->setEmail('matheodeknuydt@mail.fr');
        $user->setPassword($this->encoder->encodePassword($user, 'mypass'));
        $manager->persist($user);

        $manager->flush();
    }
}