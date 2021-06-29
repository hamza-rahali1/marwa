<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class ArticleSearch {

    /**
     * @var string|null
     */
    private $titre;

    /**
     * @var string|null
     */
    private $categorie;


    public function getTitre(): ?string
    {
        return $this->titre;
    }
    
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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


}