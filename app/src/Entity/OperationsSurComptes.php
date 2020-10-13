<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationsSurComptes
 *
 * @ORM\Table(name="operations_sur_comptes", indexes={@ORM\Index(name="i_fk_operations_sur_comptes_me", columns={"num_membre"})})
 * @ORM\Entity
 */
class OperationsSurComptes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="operations_sur_comptes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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

    public function getId(): ?int
    {
        return $this->id;
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
