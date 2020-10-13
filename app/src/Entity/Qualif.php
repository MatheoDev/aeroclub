<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualif
 *
 * @ORM\Table(name="qualif")
 * @ORM\Entity
 */
class Qualif
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_qualif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="qualif_num_qualif_seq", allocationSize=1, initialValue=1)
     */
    private $numQualif = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="qualif", type="string", length=10, nullable=true)
     */
    private $qualif;

    public function getNumQualif(): ?int
    {
        return $this->numQualif;
    }

    public function getQualif(): ?string
    {
        return $this->qualif;
    }

    public function setQualif(?string $qualif): self
    {
        $this->qualif = $qualif;

        return $this;
    }


}
