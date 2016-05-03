<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Census_collaborator
 *
 * @ORM\Table(name="census_collaborator")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\Census_collaboratorRepository")
 */
class Census_collaborator
{
    /**
     * @ORM\ManyToOne(targetEntity="Collaborator", inversedBy="censusCollaborator")
     * @ORM\JoinColumn(name="collaborator_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $collaborator;
    
    /**
     * @ORM\ManyToOne(targetEntity="Census", inversedBy="censusCollaborator")
     * @ORM\JoinColumn(name="census_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $census;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set collaborator
     *
     * @param \PC\FundationBundle\Entity\Collaborator $collaborator
     *
     * @return Census_collaborator
     */
    public function setCollaborator(\PC\FundationBundle\Entity\Collaborator $collaborator = null)
    {
        $this->collaborator = $collaborator;

        return $this;
    }

    /**
     * Get collaborator
     *
     * @return \PC\FundationBundle\Entity\Collaborator
     */
    public function getCollaborator()
    {
        return $this->collaborator;
    }

    /**
     * Set census
     *
     * @param \PC\FundationBundle\Entity\Census $census
     *
     * @return Census_collaborator
     */
    public function setCensus(\PC\FundationBundle\Entity\Census $census = null)
    {
        $this->census = $census;

        return $this;
    }

    /**
     * Get census
     *
     * @return \PC\FundationBundle\Entity\Census
     */
    public function getCensus()
    {
        return $this->census;
    }
}
