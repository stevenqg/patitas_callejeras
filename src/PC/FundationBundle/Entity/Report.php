<?php

namespace PC\FundationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity(repositoryClass="PC\FundationBundle\Repository\ReportRepository")
 */
class Report
{
    /**
     * @ORM\ManyToOne(targetEntity="Appuser", inversedBy="reports")
     * @ORM\JoinColumn(name="appuser_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $appuser; 
    
    /**
     * @ORM\ManyToOne(targetEntity="Apppet", inversedBy="reports")
     * @ORM\JoinColumn(name="apppet_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $apppet; 
    
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
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('ACTIVE', 'CLOSED')", length=255)
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
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Report
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Report
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Report
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
     * Set appuser
     *
     * @param \PC\FundationBundle\Entity\Appuser $appuser
     *
     * @return Report
     */
    public function setAppuser(\PC\FundationBundle\Entity\Appuser $appuser = null)
    {
        $this->appuser = $appuser;

        return $this;
    }

    /**
     * Get appuser
     *
     * @return \PC\FundationBundle\Entity\Appuser
     */
    public function getAppuser()
    {
        return $this->appuser;
    }

    /**
     * Set apppet
     *
     * @param \PC\FundationBundle\Entity\Apppet $apppet
     *
     * @return Report
     */
    public function setApppet(\PC\FundationBundle\Entity\Apppet $apppet = null)
    {
        $this->apppet = $apppet;

        return $this;
    }

    /**
     * Get apppet
     *
     * @return \PC\FundationBundle\Entity\Apppet
     */
    public function getApppet()
    {
        return $this->apppet;
    }
}
