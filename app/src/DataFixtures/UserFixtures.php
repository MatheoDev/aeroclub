<?php


namespace App\DataFixtures;


use App\Entity\Membres;
use App\Entity\Qualif;
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
        for ($i = 0; $i < 2; $i++) {
            $qualif = new Qualif();
            if ($i == 0)
                $qualif->setQualif('membre');
            else
                $qualif->setQualif('admin');
            $manager->persist($qualif);
        }

        $user = new Membres();
        $user->setEmail('matheodeknuydt@mail.fr');
        $user->setPassword($this->encoder->encodePassword($user, 'mypass'));
        $user->setRole(['ROLE_ADMIN']);
        $user->setNumQualif($qualif);
        $manager->persist($user);

        $user = new Membres();
        $user->setEmail('dylanderoo@mail.fr');
        $user->setPassword($this->encoder->encodePassword($user, 'mypass'));
        $user->setRole(['ROLE_USER']);
        $user->setNumQualif($qualif);
        $manager->persist($user);

        $manager->flush();
    }
}