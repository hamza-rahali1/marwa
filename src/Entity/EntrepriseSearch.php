<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class EntrepriseSearch {

    /**
     * @var string|null
     */
    private $libelle;

    /**
     * @var string|null 
     */
    private $codeIcbGeneral;

    /**
     * @var string|null
     */
    private $secteurGeneral;

    /**
     * @var string|null
     */
    private $codeICB;

    /**
     * @var string|null
     */
    private $secteur;

    /**
     * @var string|null
     */
    private $codeISIN;

    /**
     * @var float|null
     */
    private $score;

    /**
     * @var float|null
     */
    private $coursAu;

    /**
     * @var float|null
     */
    private $coursActuel;

    /**
     * @var float|null
     */
    private $cbAdmise;

    /**
     * @var float|null
     */
    private $cbTotale;

    /**
     * @var float|null
     */
    private $per;

    /**
     * @var float|null
     */
    private $pbv;

    /**
     * @var float|null
     */
    private $divYield;

    /**
     * @var float|null
     */
    private $performance;

    /**
     * @var string|null
     */
    private $option;


    public function getLibelle(): ?string
    {
        return $this->libelle;
    }
    
    public function setLibelle(string $titre): self
    {
        $this->titre = $libelle;

        return $this;
    }

    public function getOption(): ?string
    {
        return $this->option;
    }
    
    public function setOption(string $option): self
    {
        $this->option = $option;

        return $this;
    }

    public function getCodeIcbGeneral(): ?string
    {
        return $this->codeIcbGeneral;
    }
    
    public function setCodeIcbGeneral(string $codeIcbGeneral): self
    {
        $this->codeIcbGeneral = $codeIcbGeneral;

        return $this;
    }

    public function getSecteurGeneral(): ?string
    {
        return $this->secteurGeneral;
    }
    
    public function setSecteurGeneral(string $secteurGeneral): self
    {
        $this->secteurGeneral = $secteurGeneral;

        return $this;
    }

    public function getCodeICB(): ?string
    {
        return $this->codeICB;
    }
    
    public function setCodeICB(string $codeICB): self
    {
        $this->codeICB = $codeICB;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }
    
    public function setSecteur(string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getCodeISIN(): ?string
    {
        return $this->codeISIN;
    }
    
    public function setCodeISIN(string $CodeISIN): self
    {
        $this->codeISIN = $codeISIN;

        return $this;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getCoursAu(): ?float
    {
        return $this->coursAu;
    }

    public function setCoursAu(float $coursAu): self
    {
        $this->coursAu = $coursAu;

        return $this;
    }

    public function getCoursActuel(): ?float
    {
        return $this->coursActuel;
    }

    public function setCoursActuel(float $coursActuel): self
    {
        $this->coursActuel = $coursActuel;

        return $this;
    }

    public function getCbAdmise(): ?float
    {
        return $this->cbAdmise;
    }

    public function setCbAdmise(float $cbAdmise): self
    {
        $this->cbAdmise = $cbAdmise;

        return $this;
    }

    public function getCbTotale(): ?float
    {
        return $this->cbTotale;
    }

    public function setCbTotale(float $cbTotale): self
    {
        $this->cbTotale = $cbTotale;

        return $this;
    }

    public function getPer(): ?float
    {
        return $this->per;
    }

    public function setPer(float $per): self
    {
        $this->per = $per;

        return $this;
    }

    public function getPbv(): ?float
    {
        return $this->pbv;
    }

    public function setPbv(float $pbv): self
    {
        $this->pbv = $pbv;

        return $this;
    }

    public function getDivYield(): ?float
    {
        return $this->divYield;
    }

    public function setDivYield(float $divYield): self
    {
        $this->divYield = $divYield;

        return $this;
    }

    public function getPerformance(): ?float
    {
        return $this->performance;
    }

    public function setPerformance(float $performance): self
    {
        $this->performance = $performance;

        return $this;
    }




}