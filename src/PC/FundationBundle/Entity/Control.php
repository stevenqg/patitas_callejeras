<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Control
 *
 * @ORM\Table(name="controls")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\ControlRepository")
 */
class Control
{
    /**
     * @ORM\ManyToOne(targetEntity="Sterilization", inversedBy="controls")
     * @ORM\JoinColumn(name="sterilization_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $sterilization; 
    
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
     * @ORM\Column(name="is_satisfactory", type="boolean")
     */
    private $isSatisfactory;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;


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
     * Set isSatisfactory
     *
     * @param boolean $isSatisfactory
     *
     * @return Control
     */
    public function setIsSatisfactory($isSatisfactory)
    {
        $this->isSatisfactory = $isSatisfactory;

        return $this;
    }

    /**
     * Get isSatisfactory
     *
     * @return bool
     */
    public function getIsSatisfactory()
    {
        return $this->isSatisfactory;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Control
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set sterilization
     *
     * @param \PC\FundationBundle\Entity\Sterilization $sterilization
     *
     * @return Control
     */
    public function setSterilization(\PC\FundationBundle\Entity\Sterilization $sterilization = null)
    {
        $this->sterilization = $sterilization;

        return $this;
    }

    /**
     * Get sterilization
     *
     * @return \PC\FundationBundle\Entity\Sterilization
     */
    public function getSterilization()
    {
        return $this->sterilization;
    }
}
