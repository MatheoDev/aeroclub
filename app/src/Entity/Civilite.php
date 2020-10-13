<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="civilite")
 * @ORM\Entity
 */
class Civilite
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_civilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="civilite_num_civilite_seq", allocationSize=1, initialValue=1)
     */
    private $numCivilite = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="court", type="string", length=50, nullable=true)
     */
    private $court;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long", type="string", length=50, nullable=true)
     */
    private $long;

    public function getNumCivilite(): ?int
    {
        return $this->numCivilite;
    }

    public function getCourt(): ?string
    {
        return $this->court;
    }

    public function setCourt(?string $court): self
    {
        $this->court = $court;

        return $this;
    }

    public function getLong(): ?string
    {
        return $this->long;
    }

    public function setLong(?string $long): self
    {
        $this->long = $long;

        return $this;
    }


}
