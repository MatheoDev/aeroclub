<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comptes
 *
 * @ORM\Table(name="comptes", indexes={@ORM\Index(name="i_fk_comptes_membres", columns={"num_membre"})})
 * @ORM\Entity
 */
class Comptes
{
    /**
     * @var int
     *
     * @ORM\Column(name="num", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="comptes_num_seq", allocationSize=1, initialValue=1)
     */
    private $num;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_seq", type="bigint", nullable=true)
     */
    private $numSeq = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $credit = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="debit", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $debit = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=250, nullable=true)
     */
    private $comment;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="autocreation", type="boolean", nullable=true)
     */
    private $autocreation = false;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_membre", referencedColumnName="num_membre")
     * })
     */
    private $numMembre;

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function getNumSeq(): ?string
    {
        return $this->numSeq;
    }

    public function setNumSeq(?string $numSeq): self
    {
        $this->numSeq = $numSeq;

        return $this;
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

    public function getCredit(): ?string
    {
        return $this->credit;
    }

    public function setCredit(?string $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getDebit(): ?string
    {
        return $this->debit;
    }

    public function setDebit(?string $debit): self
    {
        $this->debit = $debit;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getAutocreation(): ?bool
    {
        return $this->autocreation;
    }

    public function setAutocreation(?bool $autocreation): self
    {
        $this->autocreation = $autocreation;

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


}
