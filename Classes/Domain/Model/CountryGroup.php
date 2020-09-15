<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vBase\Domain\Repository\CountryRepository;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The country group class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class CountryGroup extends AbstractEntity
{
    /**
     * The country group's item property.
     */
    public const ITEM_PROPERTY = 'countryGroup';

    /**
     * The country group's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The country group's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * The country group's countries.
     *
     * @var ObjectStorage<Country>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $countries;

    /**
     * The country repository.
     *
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * Constructs a new country group.
     */
    public function __construct()
    {
        parent::__construct();

        $this->countries = new ObjectStorage();
    }

    /**
     * Injects the country repository.
     *
     * @param CountryRepository $countryRepository The country repository
     */
    public function injectCountryRepository(CountryRepository $countryRepository): void
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Returns the country group's name.
     *
     * @return string The country group's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the country group's name.
     *
     * @param string $name The country group's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the country group's abstract.
     *
     * @return string The country group's abstract
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * Sets the country group's abstract.
     *
     * @param string $abstract The country group's abstract
     */
    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns all countries belonging to the country group.
     *
     * @param bool $reverse Reverse search, defaults to `false`
     * @return ObjectStorage|QueryResultInterface|Country[]
     */
    public function getCountries(bool $reverse = false)
    {
        if ($reverse) {
            return $this->countryRepository->findByCountryGroup($this);
        }

        return $this->countries;
    }

    /**
     * Adds a country to the country group.
     *
     * @param Country $country The country to be added
     */
    public function addCountry(Country $country): void
    {
        $this->countries->attach($country);
    }

    /**
     * Removes a country from the country group.
     *
     * @param Country $country The country to be removed
     */
    public function removeCountry(Country $country): void
    {
        $this->countries->detach($country);
    }

    /**
     * Removes all countries from the country group.
     */
    public function removeAllCountries(): void
    {
        $this->countries = new ObjectStorage();
    }

    /**
     * Returns the country group's item property (Microdata).
     *
     * @return string The country group's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
