<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pet
 *
 * @ORM\Table(name="pets")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\PetRepository")
 */
class Pet
{
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
     * @ORM\Column(name="species", type="string",  columnDefinition="ENUN('CANINE','FELINE')", length=255)
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
     * @ORM\Column(name="gender", type="string", length=255)
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
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="datetime")
     */
    private $birthdate;


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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Pet
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
}

