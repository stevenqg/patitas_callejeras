<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Sterilization
 *
 * @ORM\Table(name="sterilizations")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\SterilizationRepository")
 */
class Sterilization
{
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
     * @ORM\OneToMany(targetEntity="Control", mappedBy="sterilization")
     */ 
    protected $controls;
    
    /**
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="sterilizations")
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
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="control_at", type="datetime")
     */
    private $controlAt;

    public function __construct()
    {
        $this->controls = new ArrayCollection();
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return Sterilization
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set controlAt
     *
     * @param \DateTime $controlAt
     *
     * @return Sterilization
     */
    public function setControlAt($controlAt)
    {
        $this->controlAt = $controlAt;

        return $this;
    }

    /**
     * Get controlAt
     *
     * @return \DateTime
     */
    public function getControlAt()
    {
        return $this->controlAt;
    }

    /**
     * Set meeting
     *
     * @param \PC\FundationBundle\Entity\Meeting $meeting
     *
     * @return Sterilization
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
     * Add control
     *
     * @param \PC\FundationBundle\Entity\Control $control
     *
     * @return Sterilization
     */
    public function addControl(\PC\FundationBundle\Entity\Control $control)
    {
        $this->controls[] = $control;

        return $this;
    }

    /**
     * Remove control
     *
     * @param \PC\FundationBundle\Entity\Control $control
     */
    public function removeControl(\PC\FundationBundle\Entity\Control $control)
    {
        $this->controls->removeElement($control);
    }

    /**
     * Get controls
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getControls()
    {
        return $this->controls;
    }

    /**
     * Set user
     *
     * @param \PC\FundationBundle\Entity\User $user
     *
     * @return Sterilization
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
     * @return Sterilization
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
}
