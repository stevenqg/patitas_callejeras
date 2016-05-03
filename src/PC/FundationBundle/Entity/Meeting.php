<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meeting
 *
 * @ORM\Table(name="meetings")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\MeetingRepository")
 */
class Meeting
{
    
    /**
     * @ORM\OneToMany(targetEntity="Census_collaborator", mappedBy="meeting")
     */ 
    protected $censusCollaborator;
    
    /**
     * @ORM\OneToMany(targetEntity="Census", mappedBy="meeting")
     */ 
    protected $censuses;
    
    /**
     * @ORM\OneToMany(targetEntity="Sterilization", mappedBy="meeting")
     */
    protected $sterilizations;
    
    /**
     * @ORM\ManyToOne(targetEntity="Administrator", inversedBy="meetings")
     * @ORM\JoinColumn(name="administrator_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $administrator; 
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
    
    /**
     * @var string
     *
     * @ORM\Column(name="meeting_type", type="string", columnDefinition="ENUM('CENSUS', 'STERILIZATION')", length=50)
     */
    private $meetingType;

    public function __construct()
    {
        $this->censuses = new ArrayCollection();
        $this->sterilizations = new ArrayCollection();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Meeting
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Meeting
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Set meetingType
     *
     * @param string $meetingType
     *
     * @return Pet
     */
    public function setMeetingType($meetingType)
    {
        $this->meetingType = $meetingType;

        return $this;
    }

    /**
     * Get meetingType
     *
     * @return string
     */
    public function getMeetingType()
    {
        return $this->meetingType;
    }

    /**
     * Set administrator
     * @param \PC\FundationBundle\Entity\Administrator $administrator
     *
     * @return Meeting
     */
    public function setAdministrator(\PC\FundationBundle\Entity\Administrator $administrator = null)
    {
        $this->administrator = $administrator;
        return $this;
    }

    /**
     * Get administrator
     *
     * @return \PC\FundationBundle\Entity\Administrator
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }

    /**
     * Add census
     *
     * @param \PC\FundationBundle\Entity\Census $census
     *
     * @return Meeting
     */
    public function addCensus(\PC\FundationBundle\Entity\Census $census)
    {
        $this->censuses[] = $census;

        return $this;
    }

    /**
     * Remove census
     *
     * @param \PC\FundationBundle\Entity\Census $census
     */
    public function removeCensus(\PC\FundationBundle\Entity\Census $census)
    {
        $this->censuses->removeElement($census);
    }

    /**
     * Get censuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCensuses()
    {
        return $this->censuses;
    }

    /**
     * Add sterilization
     *
     * @param \PC\FundationBundle\Entity\Sterlization $sterilization
     *
     * @return Meeting
     */
    public function addSterilization(\PC\FundationBundle\Entity\Sterlization $sterilization)
    {
        $this->sterilizations[] = $sterilization;

        return $this;
    }

    /**
     * Remove sterilization
     *
     * @param \PC\FundationBundle\Entity\Sterlization $sterilization
     */
    public function removeSterilization(\PC\FundationBundle\Entity\Sterlization $sterilization)
    {
        $this->sterilizations->removeElement($sterilization);
    }

    /**
     * Get sterilizations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSterilizations()
    {
        return $this->sterilizations;
    }
    
    /**
     * Add censusCollaborator
     *
     * @param \PC\FundationBundle\Entity\Census_collaborator $censusCollaborator
     *
     * @return Meeting
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
