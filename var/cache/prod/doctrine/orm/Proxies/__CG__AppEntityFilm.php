<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Film extends \App\Entity\Film implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'dateSortie', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'ageMinimal', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'genre', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'acteurs'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'dateSortie', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'ageMinimal', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'genre', '' . "\0" . 'App\\Entity\\Film' . "\0" . 'acteurs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Film $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', []);

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree(int $duree = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', [$duree]);

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSortie(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSortie', []);

        return parent::getDateSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSortie(\DateTimeInterface $dateSortie = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSortie', [$dateSortie]);

        return parent::setDateSortie($dateSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(int $note = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMinimal(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMinimal', []);

        return parent::getAgeMinimal();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMinimal(int $ageMinimal = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMinimal', [$ageMinimal]);

        return parent::setAgeMinimal($ageMinimal);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenre(): ?\App\Entity\Genre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', []);

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre(\App\Entity\Genre $genre = NULL): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', [$genre]);

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getActeurs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActeurs', []);

        return parent::getActeurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addActeur(\App\Entity\Acteur $acteur): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActeur', [$acteur]);

        return parent::addActeur($acteur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActeur(\App\Entity\Acteur $acteur): \App\Entity\Film
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActeur', [$acteur]);

        return parent::removeActeur($acteur);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
