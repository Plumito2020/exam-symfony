<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocationRepository::class)
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idChambre;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $nomLocataire;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $prenomLocataire;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $dateDeb;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $dateFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdChambre(): ?int
    {
        return $this->idChambre;
    }

    public function getNomLocataire(): ?string
    {
        return $this->nomLocataire;
    }

    public function getPrenomLocataire(): ?string
    {
        return $this->prenomLocataire;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getDateDeb(): ?string
    {
        return $this->dateDeb;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }


    //------

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdChambre($idChambre)
    {
        $this->idChambre = $idChambre;
    }

    public function setNomLocataire($nomLocataire) 
    {
        $this->nomLocataire = $nomLocataire;
    }

    public function setPrenomLocataire($prenomLocataire) 
    {
        $this->prenomLocataire = $prenomLocataire;
    }

    public function setTelephone($telephone) 
    {
        $this->telephone = $telephone;
    }

    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;
    }

    public function setDateFin($dateFin) 
    {
        $this->dateFin = $dateFin;
    }
}
