<?php

namespace T3v\T3vBase\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;


/**
 * Region Class
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Region extends AbstractEntity
{
    /**
     * The region's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The region's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * The region's countries.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3v\T3vBase\Domain\Model\Country>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $countries;

    /**
     * The country repository.
     *
     * @var \T3v\T3vBase\Domain\Repository\CountryRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    public $countryRepository;

    /**
     * Constructs a new region.
     */
    public function __construct()
    {
        parent::__construct();

        $this->countries = new ObjectStorage();
    }

    /**
     * Returns the region's name.
     *
     * @return string The region's name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the region's name.
     *
     * @param string $name The region's name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the region's abstract.
     *
     * @return string The region's abstract
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets the region's abstract.
     *
     * @param string $abstract The region's abstract
     * @return void
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns all countries belonging to the region.
     *
     * @param boolean $reverse Reverse search, defaults to `false`
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3v\T3vBase\Domain\Model\Country> The region's countries
     */
    public function getCountries($reverse = false)
    {
        if ($reverse) {
            return $this->countryRepository->findByRegion($this);
        } else {
            return $this->countries;
        }
    }

    /**
     * Adds a country to the region.
     *
     * @param \T3v\T3vBase\Domain\Model\Country $country The country to be added
     * @return void
     */
    public function addCountry(\T3v\T3vBase\Domain\Model\Country $country)
    {
        $this->countries->attach($country);
    }

    /**
     * Removes a country from the region.
     *
     * @param \T3v\T3vBase\Domain\Model\Country $country The country to be removed
     * @return void
     */
    public function removeCountry(\T3v\T3vBase\Domain\Model\Country $country)
    {
        $this->countries->detach($country);
    }

    /**
     * Removes all countries from the region.
     *
     * @return void
     */
    public function removeAllCountries()
    {
        $this->countries = new ObjectStorage();
    }
}
