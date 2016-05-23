<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destinations")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\DestinationRepository")
 */
class Destination
{
    /**
     * @ORM\ManyToOne(targetEntity="Administrator", inversedBy="destinations")
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="authorized_at", type="datetime")
     */
    private $authorizedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=255)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", columnDefinition="ENUM('MONETARY', 'FOOD', 'OTHERS')", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="authorized_by", type="string", length=255)
     */
    private $authorizedBy;


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
     * Set description
     *
     * @param string $description
     *
     * @return Destination
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set authorizedAt
     *
     * @param \DateTime $authorizedAt
     *
     * @return Destination
     */
    public function setAuthorizedAt($authorizedAt)
    {
        $this->authorizedAt = $authorizedAt;

        return $this;
    }

    /**
     * Get authorizedAt
     *
     * @return \DateTime
     */
    public function getAuthorizedAt()
    {
        return $this->authorizedAt;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Destination
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Destination
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set authorizedBy
     *
     * @param string $authorizedBy
     *
     * @return Destination
     */
    public function setAuthorizedBy($authorizedBy)
    {
        $this->authorizedBy = $authorizedBy;

        return $this;
    }

    /**
     * Get authorizedBy
     *
     * @return string
     */
    public function getAuthorizedBy()
    {
        return $this->authorizedBy;
    }

    /**
     * Set administrator
     *
     * @param \PC\FundationBundle\Entity\Administrator $administrator
     *
     * @return Destination
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
}
