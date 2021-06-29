<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class OPCVMSearch {

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var string|null
     */
    private $societe;

    /**
     * @var string|null
     */
    private $categorie;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $orientation;

    /**
     * @var string|null
     */
    private $vlF;

    /**
     * @var string|null
     */
    private $vlAu;

    /**
     * @var string|null
     */
    private $an;

    /**
     * @var string|null
     */
    private $divvv;

    /**
     * @var float|null
     */
    private $perf;


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

    public function getPerf(): ?float
    {
        return $this->perf;
    }

    public function setPerf(float $perf): self
    {
        $this->perf = $perf;

        return $this;
    }


}