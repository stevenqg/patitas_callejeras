<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Census
 *
 * @ORM\Table(name="censuses")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\CensusRepository")
 */
class Census
{
    /**
     * @ORM\OneToMany(targetEntity="Census_collaborator", mappedBy="census")
     */ 
    protected $censusCollaborator;
    
    
    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\OneToOne(targetEntity="Pet")
     * @ORM\JoinColumn(name="pet_id", referencedColumnName="id")
     */
    private $pet;
    
    /**
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="censuses")
     * @ORM\JoinColumn(name="meeting_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $meeting; 
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_need_surgery", type="boolean")
     */
    private $isNeedSurgery;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_stray_dog", type="boolean")
     */
    private $isStrayDog;

    public function __construct()
    {
        $this->censusCollaborator = new ArrayCollection();
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
     * Set isNeedSurgery
     *
     * @param boolean $isNeedSurgery
     *
     * @return Census
     */
    public function setIsNeedSurgery($isNeedSurgery)
    {
        $this->isNeedSurgery = $isNeedSurgery;

        return $this;
    }

    /**
     * Get isNeedSurgery
     *
     * @return bool
     */
    public function getIsNeedSurgery()
    {
        return $this->isNeedSurgery;
    }

    /**
     * Set isStrayDog
     *
     * @param boolean $isStrayDog
     *
     * @return Census
     */
    public function setIsStrayDog($isStrayDog)
    {
        $this->isStrayDog = $isStrayDog;

        return $this;
    }

    /**
     * Get isStrayDog
     *
     * @return bool
     */
    public function getIsStrayDog()
    {
        return $this->isStrayDog;
    }

    /**
     * Set meeting
     *
     * @param \PC\FundationBundle\Entity\Meeting $meeting
     *
     * @return Census
     */
    public function setMeeting(\PC\FundationBundle\Entity\Meeting $meeting = null)
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * Get meeting
     *
     * @return \PC\FundationBundle\Entity\Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * Set user
     *
     * @param \PC\FundationBundle\Entity\User $user
     *
     * @return Census
     */
    public function setUser(\PC\FundationBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \PC\FundationBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pet
     *
     * @param \PC\FundationBundle\Entity\Pet $pet
     *
     * @return Census
     */
    public function setPet(\PC\FundationBundle\Entity\Pet $pet = null)
    {
        $this->pet = $pet;

        return $this;
    }

    /**
     * Get pet
     *
     * @return \PC\FundationBundle\Entity\Pet
     */
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Add censusCollaborator
     *
     * @param \PC\FundationBundle\Entity\Census_collaborator $censusCollaborator
     *
     * @return Census
     */
    public function addCensusCollaborator(\PC\FundationBundle\Entity\Census_collaborator $censusCollaborator)
    {
        $this->censusCollaborator[] = $censusCollaborator;

        return $this;
    }

    /**
     * Remove censusCollaborator
     *
     * @param \PC\FundationBundle\Entity\Census_collaborator $censusCollaborator
     */
    public function removeCensusCollaborator(\PC\FundationBundle\Entity\Census_collaborator $censusCollaborator)
    {
        $this->censusCollaborator->removeElement($censusCollaborator);
    }

    /**
     * Get censusCollaborator
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCensusCollaborator()
    {
        return $this->censusCollaborator;
    }
}
