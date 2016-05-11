<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adoption
 *
 * @ORM\Table(name="adoptions")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\AdoptionRepository")
 */
class Adoption
{
    
    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pet", inversedBy="adoptions")
     * @ORM\JoinColumn(name="pet_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $pet; 
    
    
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
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('APPROVED', 'DISAPPROVED', 'PENDING')", length=50)
     */
    private $status;


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
     * Set status
     *
     * @param string $status
     *
     * @return Adoption
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
     * Set user
     *
     * @param \PC\FundationBundle\Entity\User $user
     *
     * @return Adoption
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
     * @return Adoption
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
