<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Membres
 *
 * @ORM\Table(name="membres", indexes={@ORM\Index(name="i_fk_membres_qualif", columns={"num_qualif"}), @ORM\Index(name="i_fk_membres_civilite", columns={"num_civilite"})})
 * @ORM\Entity(repositoryClass="App\Repository\MembresRepository")
 */
class Membres implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_membre", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="membres_num_membre_seq", allocationSize=1, initialValue=1)
     */
    private $numMembre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_postal", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portable", type="string", length=50, nullable=true)
     */
    private $portable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_vm", type="date", nullable=true)
     */
    private $dateVm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="validite_vm", type="date", nullable=true)
     */
    private $validiteVm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_sep", type="date", nullable=true)
     */
    private $dateSep;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="validite_sep", type="date", nullable=true)
     */
    private $validiteSep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_badge", type="string", length=50, nullable=true)
     */
    private $numBadge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession", type="string", length=50, nullable=true)
     */
    private $profession;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=50, nullable=true)
     */
    private $lieuNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="carte_federale", type="string", length=50, nullable=true)
     */
    private $carteFederale;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_attestation", type="date", nullable=true)
     */
    private $dateAttestation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_theorique_bb", type="date", nullable=true)
     */
    private $dateTheoriqueBb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_theorique_ppla", type="date", nullable=true)
     */
    private $dateTheoriquePpla;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_bb", type="date", nullable=true)
     */
    private $dateBb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ppla", type="date", nullable=true)
     */
    private $datePpla;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_bb", type="string", length=50, nullable=true)
     */
    private $numeroBb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_ppla", type="string", length=50, nullable=true)
     */
    private $numeroPpla;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entree", type="date", nullable=true)
     */
    private $dateEntree;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="membre_actif", type="boolean", nullable=true)
     */
    private $membreActif = false;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="membre_inscrit", type="boolean", nullable=true, options={"default"="1"})
     */
    private $membreInscrit = true;

    /**
     * @var \Qualif
     *
     * @ORM\ManyToOne(targetEntity="Qualif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_qualif", referencedColumnName="num_qualif")
     * })
     */
    private $numQualif;

    /**
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_civilite", referencedColumnName="num_civilite")
     * })
     */
    private $numCivilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="array")
     */
    private $role = [];

    public function getNumMembre(): ?string
    {
        return $this->numMembre;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(?string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDateVm(): ?\DateTimeInterface
    {
        return $this->dateVm;
    }

    public function setDateVm(?\DateTimeInterface $dateVm): self
    {
        $this->dateVm = $dateVm;

        return $this;
    }

    public function getValiditeVm(): ?\DateTimeInterface
    {
        return $this->validiteVm;
    }

    public function setValiditeVm(?\DateTimeInterface $validiteVm): self
    {
        $this->validiteVm = $validiteVm;

        return $this;
    }

    public function getDateSep(): ?\DateTimeInterface
    {
        return $this->dateSep;
    }

    public function setDateSep(?\DateTimeInterface $dateSep): self
    {
        $this->dateSep = $dateSep;

        return $this;
    }

    public function getValiditeSep(): ?\DateTimeInterface
    {
        return $this->validiteSep;
    }

    public function setValiditeSep(?\DateTimeInterface $validiteSep): self
    {
        $this->validiteSep = $validiteSep;

        return $this;
    }

    public function getNumBadge(): ?string
    {
        return $this->numBadge;
    }

    public function setNumBadge(?string $numBadge): self
    {
        $this->numBadge = $numBadge;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getCarteFederale(): ?string
    {
        return $this->carteFederale;
    }

    public function setCarteFederale(?string $carteFederale): self
    {
        $this->carteFederale = $carteFederale;

        return $this;
    }

    public function getDateAttestation(): ?\DateTimeInterface
    {
        return $this->dateAttestation;
    }

    public function setDateAttestation(?\DateTimeInterface $dateAttestation): self
    {
        $this->dateAttestation = $dateAttestation;

        return $this;
    }

    public function getDateTheoriqueBb(): ?\DateTimeInterface
    {
        return $this->dateTheoriqueBb;
    }

    public function setDateTheoriqueBb(?\DateTimeInterface $dateTheoriqueBb): self
    {
        $this->dateTheoriqueBb = $dateTheoriqueBb;

        return $this;
    }

    public function getDateTheoriquePpla(): ?\DateTimeInterface
    {
        return $this->dateTheoriquePpla;
    }

    public function setDateTheoriquePpla(?\DateTimeInterface $dateTheoriquePpla): self
    {
        $this->dateTheoriquePpla = $dateTheoriquePpla;

        return $this;
    }

    public function getDateBb(): ?\DateTimeInterface
    {
        return $this->dateBb;
    }

    public function setDateBb(?\DateTimeInterface $dateBb): self
    {
        $this->dateBb = $dateBb;

        return $this;
    }

    public function getDatePpla(): ?\DateTimeInterface
    {
        return $this->datePpla;
    }

    public function setDatePpla(?\DateTimeInterface $datePpla): self
    {
        $this->datePpla = $datePpla;

        return $this;
    }

    public function getNumeroBb(): ?string
    {
        return $this->numeroBb;
    }

    public function setNumeroBb(?string $numeroBb): self
    {
        $this->numeroBb = $numeroBb;

        return $this;
    }

    public function getNumeroPpla(): ?string
    {
        return $this->numeroPpla;
    }

    public function setNumeroPpla(?string $numeroPpla): self
    {
        $this->numeroPpla = $numeroPpla;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->dateEntree;
    }

    public function setDateEntree(?\DateTimeInterface $dateEntree): self
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getMembreActif(): ?bool
    {
        return $this->membreActif;
    }

    public function setMembreActif(?bool $membreActif): self
    {
        $this->membreActif = $membreActif;

        return $this;
    }

    public function getMembreInscrit(): ?bool
    {
        return $this->membreInscrit;
    }

    public function setMembreInscrit(?bool $membreInscrit): self
    {
        $this->membreInscrit = $membreInscrit;

        return $this;
    }

    public function getNumQualif(): ?Qualif
    {
        return $this->numQualif;
    }

    public function setNumQualif(?Qualif $numQualif): self
    {
        $this->numQualif = $numQualif;

        return $this;
    }

    public function getNumCivilite(): ?Civilite
    {
        return $this->numCivilite;
    }

    public function setNumCivilite(?Civilite $numCivilite): self
    {
        $this->numCivilite = $numCivilite;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getRoles()
    {
        return $this->role;
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->getEmail();
    }

    public function eraseCredentials()
    {
    }

    public function getRole(): ?array
    {
        return $this->role;
    }

    public function setRole(array $role): self
    {
        $this->role = $role;

        return $this;
    }
}
