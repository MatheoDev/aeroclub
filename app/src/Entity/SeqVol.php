<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeqVol
 *
 * @ORM\Table(name="seq_vol", indexes={@ORM\Index(name="i_fk_seq_vol_instructeurs", columns={"num_instructeur"}), @ORM\Index(name="i_fk_seq_vol_membres", columns={"num_membre"}), @ORM\Index(name="i_fk_seq_vol_avions", columns={"num_avion"})})
 * @ORM\Entity(repositoryClass="App\Repository\SeqVolRepository")
 */
class SeqVol
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_seq", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_vol_num_seq_seq", allocationSize=1, initialValue=1)
     */
    private $numSeq;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="temps", type="integer", nullable=true)
     */
    private $temps = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="heures_forfait", type="float", precision=10, scale=0, nullable=true)
     */
    private $heuresForfait = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_special", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixSpecial = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="taux", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $taux = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reduction_semaine", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $reductionSemaine = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif", type="string", length=50, nullable=true)
     */
    private $motif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="taux_instructeur", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $tauxInstructeur = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="forfait_initiation", type="boolean", nullable=true)
     */
    private $forfaitInitiation;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_membre", referencedColumnName="num_membre")
     * })
     */
    private $numMembre;

    /**
     * @var \Avions
     *
     * @ORM\ManyToOne(targetEntity="Avions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_avion", referencedColumnName="num_avion")
     * })
     */
    private $numAvion;

    /**
     * @var \Instructeurs
     *
     * @ORM\ManyToOne(targetEntity="Instructeurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_instructeur", referencedColumnName="num_instructeur")
     * })
     */
    private $numInstructeur;

    public function getNumSeq(): ?string
    {
        return $this->numSeq;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTemps(): ?int
    {
        return $this->temps;
    }

    public function setTemps(?int $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getHeuresForfait(): ?float
    {
        return $this->heuresForfait;
    }

    public function setHeuresForfait(?float $heuresForfait): self
    {
        $this->heuresForfait = $heuresForfait;

        return $this;
    }

    public function getPrixSpecial(): ?string
    {
        return $this->prixSpecial;
    }

    public function setPrixSpecial(?string $prixSpecial): self
    {
        $this->prixSpecial = $prixSpecial;

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

    public function getReductionSemaine(): ?string
    {
        return $this->reductionSemaine;
    }

    public function setReductionSemaine(?string $reductionSemaine): self
    {
        $this->reductionSemaine = $reductionSemaine;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getTauxInstructeur(): ?string
    {
        return $this->tauxInstructeur;
    }

    public function setTauxInstructeur(?string $tauxInstructeur): self
    {
        $this->tauxInstructeur = $tauxInstructeur;

        return $this;
    }

    public function getForfaitInitiation(): ?bool
    {
        return $this->forfaitInitiation;
    }

    public function setForfaitInitiation(?bool $forfaitInitiation): self
    {
        $this->forfaitInitiation = $forfaitInitiation;

        return $this;
    }

    public function getNumMembre(): ?Membres
    {
        return $this->numMembre;
    }

    public function setNumMembre(?Membres $numMembre): self
    {
        $this->numMembre = $numMembre;

        return $this;
    }

    public function getNumAvion(): ?Avions
    {
        return $this->numAvion;
    }

    public function setNumAvion(?Avions $numAvion): self
    {
        $this->numAvion = $numAvion;

        return $this;
    }

    public function getNumInstructeur(): ?Instructeurs
    {
        return $this->numInstructeur;
    }

    public function setNumInstructeur(?Instructeurs $numInstructeur): self
    {
        $this->numInstructeur = $numInstructeur;

        return $this;
    }


}
