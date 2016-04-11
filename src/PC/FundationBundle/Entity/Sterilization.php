<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sterilization
 *
 * @ORM\Table(name="sterilizations")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\SterilizationRepository")
 */
class Sterilization
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
}

