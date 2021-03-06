<?php

namespace Proxies\__CG__\PC\FundationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Meeting extends \PC\FundationBundle\Entity\Meeting implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'censusCollaborator', 'censuses', 'sterilizations', 'administrator', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'id', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'createdAt', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'address', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'meetingType'];
        }

        return ['__isInitialized__', 'censusCollaborator', 'censuses', 'sterilizations', 'administrator', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'id', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'createdAt', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'address', '' . "\0" . 'PC\\FundationBundle\\Entity\\Meeting' . "\0" . 'meetingType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Meeting $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeetingType($meetingType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeetingType', [$meetingType]);

        return parent::setMeetingType($meetingType);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeetingType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeetingType', []);

        return parent::getMeetingType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdministrator(\PC\FundationBundle\Entity\Administrator $administrator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdministrator', [$administrator]);

        return parent::setAdministrator($administrator);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdministrator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdministrator', []);

        return parent::getAdministrator();
    }

    /**
     * {@inheritDoc}
     */
    public function addCensus(\PC\FundationBundle\Entity\Census $census)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCensus', [$census]);

        return parent::addCensus($census);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCensus(\PC\FundationBundle\Entity\Census $census)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCensus', [$census]);

        return parent::removeCensus($census);
    }

    /**
     * {@inheritDoc}
     */
    public function getCensuses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCensuses', []);

        return parent::getCensuses();
    }

    /**
     * {@inheritDoc}
     */
    public function addSterilization(\PC\FundationBundle\Entity\Sterilization $sterilization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSterilization', [$sterilization]);

        return parent::addSterilization($sterilization);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSterilization(\PC\FundationBundle\Entity\Sterilization $sterilization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSterilization', [$sterilization]);

        return parent::removeSterilization($sterilization);
    }

    /**
     * {@inheritDoc}
     */
    public function getSterilizations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSterilizations', []);

        return parent::getSterilizations();
    }

    /**
     * {@inheritDoc}
     */
    public function addCensusCollaborator(\PC\FundationBundle\Entity\Census_collaborator $censusCollaborator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCensusCollaborator', [$censusCollaborator]);

        return parent::addCensusCollaborator($censusCollaborator);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCensusCollaborator(\PC\FundationBundle\Entity\Census_collaborator $censusCollaborator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCensusCollaborator', [$censusCollaborator]);

        return parent::removeCensusCollaborator($censusCollaborator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCensusCollaborator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCensusCollaborator', []);

        return parent::getCensusCollaborator();
    }

}
