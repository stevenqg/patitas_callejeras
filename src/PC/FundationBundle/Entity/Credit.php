<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credits")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\CreditRepository")
 */
class Credit
{
    
    /**
     * @ORM\ManyToOne(targetEntity="Pet", inversedBy="credits")
     * @ORM\JoinColumn(name="pet_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $pet;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="credits")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $user;
    
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
     * @var string
     *
     * @ORM\Column(name="responsible", type="string", length=255)
     */
    private $responsible;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="destiny", type="string", length=255)
     */
    private $destiny;

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
     * Set amount
     *
     * @param integer $amount
     *
     * @return Credit
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
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Credit
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Credit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set destiny
     *
     * @param string $destiny
     *
     * @return Credit
     */
    public function setDestiny($destiny)
    {
        $this->destiny = $destiny;

        return $this;
    }

    /**
     * Get destiny
     *
     * @return string
     */
    public function getDestiny()
    {
        return $this->destiny;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Credit
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
     * Set pet
     *
     * @param \PC\FundationBundle\Entity\Pet $pet
     *
     * @return Credit
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
     * Set user
     *
     * @param \PC\FundationBundle\Entity\User $user
     *
     * @return Credit
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
}
