<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Pet
 *
 * @ORM\Table(name="pets")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\PetRepository")
 */
class Pet
{
    
    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="pet")
     */ 
    protected $photos;
    
    /**
     * @ORM\OneToMany(targetEntity="Credit", mappedBy="pet")
     */ 
    protected $credits;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="species", type="string", columnDefinition="ENUM('CANINE', 'FELINE')", length=50)
     */
    private $species;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="colour", type="string", length=255)
     */
    private $colour;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", columnDefinition="ENUM('MALE', 'FEMALE')", length=50)
     */
    private $gender;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_vacunated", type="boolean")
     */
    private $isVacunated;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_sterilized", type="boolean")
     */
    private $isSterilized;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('UNADOPTED', 'PENDING', 'ADOPTED', 'EXTERNAL')", length=50)
     */
    private $status;


    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->credits = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Pet
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set species
     *
     * @param string $species
     *
     * @return Pet
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Pet
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set colour
     *
     * @param string $colour
     *
     * @return Pet
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Pet
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set isVacunated
     *
     * @param boolean $isVacunated
     *
     * @return Pet
     */
    public function setIsVacunated($isVacunated)
    {
        $this->isVacunated = $isVacunated;

        return $this;
    }

    /**
     * Get isVacunated
     *
     * @return bool
     */
    public function getIsVacunated()
    {
        return $this->isVacunated;
    }

    /**
     * Set isSterilized
     *
     * @param boolean $isSterilized
     *
     * @return Pet
     */
    public function setIsSterilized($isSterilized)
    {
        $this->isSterilized = $isSterilized;

        return $this;
    }

    /**
     * Get isSterilized
     *
     * @return bool
     */
    public function getIsSterilized()
    {
        return $this->isSterilized;
    }


    /**
     * Add photo
     *
     * @param \PC\FundationBundle\Entity\Photo $photo
     *
     * @return Pet
     */
    public function addPhoto(\PC\FundationBundle\Entity\Photo $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \PC\FundationBundle\Entity\Photo $photo
     */
    public function removePhoto(\PC\FundationBundle\Entity\Photo $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add credit
     *
     * @param \PC\FundationBundle\Entity\Credit $credit
     *
     * @return Pet
     */
    public function addCredit(\PC\FundationBundle\Entity\Credit $credit)
    {
        $this->credits[] = $credit;

        return $this;
    }

    /**
     * Remove credit
     *
     * @param \PC\FundationBundle\Entity\Credit $credit
     */
    public function removeCredit(\PC\FundationBundle\Entity\Credit $credit)
    {
        $this->credits->removeElement($credit);
    }

    /**
     * Get credits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCredits()
    {
        return $this->credits;
    }
    
    /**
     * Set status
     *
     * @param string $status
     *
     * @return Pet
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
