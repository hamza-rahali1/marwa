<?php

namespace App\Entity;

use App\Repository\OPCVMRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OPCVMRepository::class)
 */
class OPCVM
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orientation;

    /**
     * @ORM\Column(type="float")
     */
    private $vlF;

    /**
     * @ORM\Column(type="float")
     */
    private $vlAu;

    /**
     * @ORM\Column(type="float")
     */
    private $an;

    /**
     * @ORM\Column(type="float")
     */
    private $divvv;

    /**
     * @ORM\Column(type="datetime")
     */
    private $_dateF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $_dateAu;

    /**
     * @var float|null
     */
    private $perf;

    public function getPerf(): ?float
    {
        $this->perf = (($this->vlAu)+($this->divvv)-($this->vlF))/($this->vlF);
        return $this->perf;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getVlF(): ?float
    {
        return $this->vlF;
    }

    public function setVlF(float $vlF): self
    {
        $this->vlF = $vlF;

        return $this;
    }

    public function getVlAu(): ?float
    {
        return $this->vlAu;
    }

    public function setVlAu(float $vlAu): self
    {
        $this->vlAu = $vlAu;

        return $this;
    }

    public function getAn(): ?float
    {
        return $this->an;
    }

    public function setAn(float $an): self
    {
        $this->an = $an;

        return $this;
    }

    public function getDivvv(): ?float
    {
        return $this->divvv;
    }

    public function setDivvv(float $divvv): self
    {
        $this->divvv = $divvv;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->_dateF;
    }

    public function setDateF(\DateTimeInterface $_dateF): self
    {
        $this->_dateF = $_dateF;

        return $this;
    }

    public function getDateAu(): ?\DateTimeInterface
    {
        return $this->_dateAu;
    }

    public function setDateAu(\DateTimeInterface $_dateAu): self
    {
        $this->_dateAu = $_dateAu;

        return $this;
    }
}
