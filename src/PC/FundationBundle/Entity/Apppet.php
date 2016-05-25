<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Apppet
 *
 * @ORM\Table(name="apppets")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\ApppetRepository")
 */
class Apppet
{
    /**
     * @ORM\ManyToOne(targetEntity="Appuser", inversedBy="apppets")
     * @ORM\JoinColumn(name="appuser_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $appuser; 
    
    /**
     * @ORM\OneToMany(targetEntity="Report", mappedBy="apppet")
     */ 
    protected $reports;
    
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
     * @ORM\Column(name="species", type="string", columnDefinition="ENUM('CANINE', 'FELINE')", length=255)
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
     * @ORM\Column(name="gender", type="string", columnDefinition="ENUM('MALE', 'FEMALE')", length=255)
     */
    private $gender;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('LOST', 'FOUND')", length=50)
     */
    private $status;

    public function __construct()
    {
        $this->reports = new ArrayCollection();
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
     * @return Apppet
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
     * @param string $age
     *
     * @return Apppet
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
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
     * @return Apppet
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
     * @return Apppet
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
     * @return Apppet
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
     * @return Apppet
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
     * Set status
     *
     * @param string $status
     *
     * @return Apppet
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

    /**
     * Set appuser
     *
     * @param \PC\FundationBundle\Entity\Appuser $appuser
     *
     * @return Apppet
     */
    public function setAppuser(\PC\FundationBundle\Entity\Appuser $appuser = null)
    {
        $this->appuser = $appuser;

        return $this;
    }

    /**
     * Get appuser
     *
     * @return \PC\FundationBundle\Entity\Appuser
     */
    public function getAppuser()
    {
        return $this->appuser;
    }

    /**
     * Add report
     *
     * @param \PC\FundationBundle\Entity\Report $report
     *
     * @return Apppet
     */
    public function addReport(\PC\FundationBundle\Entity\Report $report)
    {
        $this->reports[] = $report;

        return $this;
    }

    /**
     * Remove report
     *
     * @param \PC\FundationBundle\Entity\Report $report
     */
    public function removeReport(\PC\FundationBundle\Entity\Report $report)
    {
        $this->reports->removeElement($report);
    }

    /**
     * Get reports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReports()
    {
        return $this->reports;
    }
}
