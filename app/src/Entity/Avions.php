<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avions
 *
 * @ORM\Table(name="avions")
 * @ORM\Entity(repositoryClass="App\Repository\AvionsRepository")
 */
class Avions
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_avion", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="avions_num_avion_seq", allocationSize=1, initialValue=1)
     */
    private $numAvion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="taux", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $taux = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="forfait1", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $forfait1 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="forfait2", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $forfait2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="forfait3", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $forfait3 = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="heures_forfait1", type="float", precision=10, scale=0, nullable=true)
     */
    private $heuresForfait1 = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="heures_forfait2", type="float", precision=10, scale=0, nullable=true)
     */
    private $heuresForfait2 = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="heures_forfait3", type="float", precision=10, scale=0, nullable=true)
     */
    private $heuresForfait3 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reduction_semaine", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $reductionSemaine = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="immatriculation", type="string", length=50, nullable=true)
     */
    private $immatriculation;

    public function getNumAvion(): ?string
    {
        return $this->numAvion;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTaux(): ?string
    {
        return $this->taux;
    }

    public function setTaux(?string $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getForfait1(): ?string
    {
        return $this->forfait1;
    }

    public function setForfait1(?string $forfait1): self
    {
        $this->forfait1 = $forfait1;

        return $this;
    }

    public function getForfait2(): ?string
    {
        return $this->forfait2;
    }

    public function setForfait2(?string $forfait2): self
    {
        $this->forfait2 = $forfait2;

        return $this;
    }

    public function getForfait3(): ?string
    {
        return $this->forfait3;
    }

    public function setForfait3(?string $forfait3): self
    {
        $this->forfait3 = $forfait3;

        return $this;
    }

    public function getHeuresForfait1(): ?float
    {
        return $this->heuresForfait1;
    }

    public function setHeuresForfait1(?float $heuresForfait1): self
    {
        $this->heuresForfait1 = $heuresForfait1;

        return $this;
    }

    public function getHeuresForfait2(): ?float
    {
        return $this->heuresForfait2;
    }

    public function setHeuresForfait2(?float $heuresForfait2): self
    {
        $this->heuresForfait2 = $heuresForfait2;

        return $this;
    }

    public function getHeuresForfait3(): ?float
    {
        return $this->heuresForfait3;
    }

    public function setHeuresForfait3(?float $heuresForfait3): self
    {
        $this->heuresForfait3 = $heuresForfait3;

        return $this;
    }

    public function getReductionSemaine(): ?string
    {
        return $this->reductionSemaine;
    }

    public function setReductionSemaine(?string $reductionSemaine): self
    {
        $this->reductionSemaine = $reductionSemaine;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }


}
