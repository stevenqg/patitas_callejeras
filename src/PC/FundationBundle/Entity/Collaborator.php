<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborator
 *
 * @ORM\Table(name="collaborator")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\CollaboratorRepository")
 */
class Collaborator
{
    
    /**
     * @ORM\OneToMany(targetEntity="Census_collaborator", mappedBy="collaborator")
     */ 
    protected $censusCollaborator;
    
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
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

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
     * Set name
     *
     * @param string $name
     *
     * @return Collaborator
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Collaborator
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Collaborator
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
     * Add censusCollaborator
     *
     * @param \PC\FundationBundle\Entity\Census_collaborator $censusCollaborator
     *
     * @return Collaborator
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
