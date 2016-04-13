<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Census
 *
 * @ORM\Table(name="censuses")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\CensusRepository")
 */
class Census
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
     * @ORM\Column(name="is_need_surgery", type="boolean")
     */
    private $isNeedSurgery;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_stray_dog", type="boolean")
     */
    private $isStrayDog;


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
     * Set isNeedSurgery
     *
     * @param boolean $isNeedSurgery
     *
     * @return Census
     */
    public function setIsNeedSurgery($isNeedSurgery)
    {
        $this->isNeedSurgery = $isNeedSurgery;

        return $this;
    }

    /**
     * Get isNeedSurgery
     *
     * @return bool
     */
    public function getIsNeedSurgery()
    {
        return $this->isNeedSurgery;
    }

    /**
     * Set isStrayDog
     *
     * @param boolean $isStrayDog
     *
     * @return Census
     */
    public function setIsStrayDog($isStrayDog)
    {
        $this->isStrayDog = $isStrayDog;

        return $this;
    }

    /**
     * Get isStrayDog
     *
     * @return bool
     */
    public function getIsStrayDog()
    {
        return $this->isStrayDog;
    }
}
