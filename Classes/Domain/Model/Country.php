<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vBase\Domain\Repository\CountryGroupRepository;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The country class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Country extends AbstractEntity
{
    /**
     * The country's item property.
     */
    public const ITEM_PROPERTY = 'country';

    /**
     * The country's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The country's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * The country's country groups.
     *
     * @var ObjectStorage<CountryGroup>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $countryGroups;

    /**
     * The country group repository.
     *
     * @var CountryGroupRepository
     */
    protected $countryGroupRepository;

    /**
     * Constructs a new country.
     */
    public function __construct()
    {
        parent::__construct();

        $this->countryGroups = new ObjectStorage();
    }

    /**
     * Injects the country group repository.
     *
     * @param CountryGroupRepository $countryGroupRepository The country group repository
     */
    public function injectCountryGroupRepository(CountryGroupRepository $countryGroupRepository): void
    {
        $this->countryGroupRepository = $countryGroupRepository;
    }

    /**
     * Returns the country's name.
     *
     * @return string The country's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the country's name.
     *
     * @param string $name The country's name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the country's abstract.
     *
     * @return string The country's abstract
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * Sets the country's abstract.
     *
     * @param string $abstract The country's abstract
     * @return void
     */
    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns all country groups belonging to the country.
     *
     * @param boolean $reverse Reverse search, defaults to `false`
     * @return ObjectStorage|QueryResultInterface|CountryGroup[]
     */
    public function getCountryGroups(bool $reverse = false)
    {
        if ($reverse) {
            return $this->countryGroupRepository->findByCountry($this);
        }

        return $this->countryGroups;
    }

    /**
     * Adds a country group to the country.
     *
     * @param CountryGroup $countryGroup The country group to be added
     */
    public function addCountryGroup(CountryGroup $countryGroup): void
    {
        $this->countryGroups->attach($countryGroup);
    }

    /**
     * Removes a country group from the country.
     *
     * @param CountryGroup $countryGroup The country group to be removed
     */
    public function removeCountryGroup(CountryGroup $countryGroup): void
    {
        $this->countryGroups->detach($countryGroup);
    }

    /**
     * Removes all country groups from the country.
     */
    public function removeAllCountryGroups(): void
    {
        $this->countryGroups = new ObjectStorage();
    }

    /**
     * Returns the country's item property (Microdata).
     *
     * @return string The country's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
