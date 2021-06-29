<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
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
    private $codeIcbGeneral;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secteurGeneral;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeICB;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeISIN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $titresAdmis;

    /**
     * @ORM\Column(type="float")
     */
    private $titresEmiss;

    /**
     * @ORM\Column(type="float")
     */
    private $coursAu;

    /**
     * @ORM\Column(type="float")
     */
    private $coursActuel;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cours_at;

    /**
     * @var float|null
     */
    private $cbAdmise;

    /**
     * @var float|null
     */
    private $cbTotale;

    /**
     * @ORM\Column(type="float")
     */
    private $score;

    /**
     * @ORM\Column(type="float")
     */
    private $rnpg;

    /**
     * @ORM\Column(type="float")
     */
    private $fpnds;

    /**
     * @ORM\Column(type="text")
     */
    private $ptForte;

    /**
     * @ORM\Column(type="text")
     */
    private $ptFaible;

    /**
     * @ORM\Column(type="text")
     */
    private $actualite;

    /**
     * @ORM\Column(type="text")
     */
    private $analyse;

    /**
     * @ORM\Column(type="text")
     */
    private $activite;

    /**
     * @ORM\Column(type="text")
     */
    private $mecaDeProfit;

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
     * @ORM\Column(type="float")
     */
    private $divvv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOption(): ?string
    {
        if( (($this->per) < 1.5) && (($this->score) > 35) )
            return ("Achat");    
        if( (($this->per) < 3) && (($this->score) > 25) )
            return ("Accumuler"); 
        if( (($this->per) < 5) && (($this->score) > 15) )
            return ("Alléger");  
    }

    public function getPerformance(): ?float
    {
        $this->performance = (($this->coursActuel)+($this->divYield)-($this->coursAu))/($this->coursAu);
        return $this->performance;
    }

    public function getcbAdmise(): ?float
    {
        $this->cbAdmise = ($this->titresAdmis)*($this->coursActuel)/1000000;
        return $this->cbAdmise;
    }

    public function getPer(): ?float
    {
        $this->per = ($this->cbTotale)/($this->rnpg);
        return $this->per;
    }

    public function getPbv(): ?float
    {
        $this->pbv = ($this->cbTotale)/($this->fpnds);
        return $this->pbv;
    }

    public function getDivYield(): ?float
    {
        $this->divYield = ($this->divvv)/($this->coursActuel);
        return $this->cbAdmise;
    }

    public function getcbTotale(): ?float
    {
        $this->cbTotale = ($this->titresEmiss)*($this->coursActuel)/1000000;
        return $this->cbTotale;
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

    public function setCodeISIN(string $codeISIN): self
    {
        $this->codeISIN = $codeISIN;

        return $this;
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

    public function getTitresAdmis(): ?float
    {
        return $this->titresAdmis;
    }

    public function setTitresAdmis(float $titresAdmis): self
    {
        $this->titresAdmis = $titresAdmis;

        return $this;
    }

    public function getTitresEmiss(): ?float
    {
        return $this->titresEmiss;
    }

    public function setTitresEmiss(float $titresEmiss): self
    {
        $this->titresEmiss = $titresEmiss;

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

    public function getCoursAt(): ?\DateTimeInterface
    {
        return $this->cours_at;
    }

    public function setCoursAt(\DateTimeInterface $cours_at): self
    {
        $this->cours_at = $cours_at;

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

    public function getRnpg(): ?float
    {
        return $this->rnpg;
    }

    public function setRnpg(float $rnpg): self
    {
        $this->rnpg = $rnpg;

        return $this;
    }

    public function getFpnds(): ?float
    {
        return $this->fpnds;
    }

    public function setFpnds(float $fpnds): self
    {
        $this->fpnds = $fpnds;

        return $this;
    }

    public function getPtForte(): ?string
    {
        return $this->ptForte;
    }

    public function setPtForte(string $ptForte): self
    {
        $this->ptForte = $ptForte;

        return $this;
    }

    public function getPtFaible(): ?string
    {
        return $this->ptFaible;
    }

    public function setPtFaible(string $ptFaible): self
    {
        $this->ptFaible = $ptFaible;

        return $this;
    }

    public function getActualite(): ?string
    {
        return $this->actualite;
    }

    public function setActualite(string $actualite): self
    {
        $this->actualite = $actualite;

        return $this;
    }

    public function getAnalyse(): ?string
    {
        return $this->analyse;
    }

    public function setAnalyse(string $analyse): self
    {
        $this->analyse = $analyse;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getMecaDeProfit(): ?string
    {
        return $this->mecaDeProfit;
    }

    public function setMecaDeProfit(string $mecaDeProfit): self
    {
        $this->mecaDeProfit = $mecaDeProfit;

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
}
