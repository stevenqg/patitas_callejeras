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
}

