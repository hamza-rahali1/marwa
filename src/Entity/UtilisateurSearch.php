<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class UtilisateurSearch {

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null 
     */
    private $prenom;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $tel;


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }


}