<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Administrator
 *
 * @ORM\Table(name="administrators")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\AdministratorRepository")
 */
class Administrator implements UserInterface
{ 
    
    /**
     * @ORM\OneToMany(targetEntity="Donative", mappedBy="administrator")
     */ 
    protected $donatives;
    
     /**
     * @ORM\OneToMany(targetEntity="Meeting", mappedBy="administrator")
     */ 
    protected $meetings;
    
    /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="administrator")
     */ 
    protected $events;
    
    /**
     * @ORM\OneToMany(targetEntity="Destination", mappedBy="administrator")
     */ 
    protected $destinations;
    
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
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    public function __construct()
    {
        $this->donatives = new ArrayCollection();
        $this->meetings = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->destinations = new ArrayCollection();
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
     * @return Administrator
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Administrator
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Administrator
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
     * Set email
     *
     * @param string $email
     *
     * @return Administrator
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Administrator
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add donative
     *
     * @param \PC\FundationBundle\Entity\Donative $donative
     *
     * @return Administrator
     */
    public function addDonative(\PC\FundationBundle\Entity\Donative $donative)
    {
        $this->donatives[] = $donative;

        return $this;
    }

    /**
     * Remove donative
     *
     * @param \PC\FundationBundle\Entity\Donative $donative
     */
    public function removeDonative(\PC\FundationBundle\Entity\Donative $donative)
    {
        $this->donatives->removeElement($donative);
    }

    /**
     * Get donatives
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDonatives()
    {
        return $this->donatives;
    }

    /**
     * Add meeting
     *
     * @param \PC\FundationBundle\Entity\Meeting $meeting
     *
     * @return Administrator
     */
    public function addMeeting(\PC\FundationBundle\Entity\Meeting $meeting)
    {
        $this->meetings[] = $meeting;

        return $this;
    }

    /**
     * Remove meeting
     *
     * @param \PC\FundationBundle\Entity\Meeting $meeting
     */
    public function removeMeeting(\PC\FundationBundle\Entity\Meeting $meeting)
    {
        $this->meetings->removeElement($meeting);
    }

    /**
     * Get meetings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMeetings()
    {
        return $this->meetings;
    }

    /**
     * Add event
     *
     * @param \PC\FundationBundle\Entity\Event $event
     *
     * @return Administrator
     */
    public function addEvent(\PC\FundationBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \PC\FundationBundle\Entity\Event $event
     */
    public function removeEvent(\PC\FundationBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    
    /**
     * metodos del userinterface
     */ 
    
    public function getRoles()
    {
        
    }
    
    public function getSalt()
    {
        
    }
    
    public function getUsername()
    {
        
    }
    
    public function eraseCredentials()
    {
        
    }
    

    /**
     * Add destination
     *
     * @param \PC\FundationBundle\Entity\Destination $destination
     *
     * @return Administrator
     */
    public function addDestination(\PC\FundationBundle\Entity\Destination $destination)
    {
        $this->destinations[] = $destination;

        return $this;
    }

    /**
     * Remove destination
     *
     * @param \PC\FundationBundle\Entity\Destination $destination
     */
    public function removeDestination(\PC\FundationBundle\Entity\Destination $destination)
    {
        $this->destinations->removeElement($destination);
    }

    /**
     * Get destinations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDestinations()
    {
        return $this->destinations;
    }
}
