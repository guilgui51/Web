<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Participant extends \App\Entity\Participant implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'emailAddress', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'uid', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'isAlive', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'numberOfKills', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'target', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'killer', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'party', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'mission'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'emailAddress', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'uid', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'isAlive', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'numberOfKills', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'target', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'killer', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'party', '' . "\0" . 'App\\Entity\\Participant' . "\0" . 'mission'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Participant $proxy) {
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
    public function getId(): ?int
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
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailAddress', []);

        return parent::getEmailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailAddress(string $emailAddress): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailAddress', [$emailAddress]);

        return parent::setEmailAddress($emailAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getUid(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUid', []);

        return parent::getUid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUid(string $uid): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUid', [$uid]);

        return parent::setUid($uid);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAlive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAlive', []);

        return parent::getIsAlive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAlive(bool $isAlive): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAlive', [$isAlive]);

        return parent::setIsAlive($isAlive);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfKills(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfKills', []);

        return parent::getNumberOfKills();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfKills(int $numberOfKills): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfKills', [$numberOfKills]);

        return parent::setNumberOfKills($numberOfKills);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarget(): ?\App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarget', []);

        return parent::getTarget();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarget(?\App\Entity\Participant $target): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarget', [$target]);

        return parent::setTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function getKiller(): ?\App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKiller', []);

        return parent::getKiller();
    }

    /**
     * {@inheritDoc}
     */
    public function setKiller(?\App\Entity\Participant $killer): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKiller', [$killer]);

        return parent::setKiller($killer);
    }

    /**
     * {@inheritDoc}
     */
    public function getParty(): ?\App\Entity\KillerParty
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParty', []);

        return parent::getParty();
    }

    /**
     * {@inheritDoc}
     */
    public function setParty(?\App\Entity\KillerParty $party): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParty', [$party]);

        return parent::setParty($party);
    }

    /**
     * {@inheritDoc}
     */
    public function getMission(): ?\App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMission', []);

        return parent::getMission();
    }

    /**
     * {@inheritDoc}
     */
    public function setMission(?\App\Entity\Mission $mission): \App\Entity\Participant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMission', [$mission]);

        return parent::setMission($mission);
    }

}
