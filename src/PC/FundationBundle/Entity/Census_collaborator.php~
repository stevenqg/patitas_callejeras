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
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="censusCollaborator")
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
     * Set meeting
     *
     * @param \PC\FundationBundle\Entity\Meeting $meeting
     *
     * @return Census_collaborator
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
}
