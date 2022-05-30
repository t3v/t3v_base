<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vBase\Domain\Repository\CountryGroupRepository;
use T3v\T3vBase\Domain\Repository\RegionRepository;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The country class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Country extends BaseModel
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
     * The country's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The country's regions.
     *
     * @var ObjectStorage<Region>
     * @Extbase\ORM\Lazy
     */
    protected $regions;

    /**
     * The country's country groups.
     *
     * @var ObjectStorage<CountryGroup>
     * @Extbase\ORM\Lazy
     */
    protected $countryGroups;

    /**
     * The country's description.
     *
     * @var string
     */
    protected $description;

    /**
     * The region repository.
     *
     * @var RegionRepository
     */
    protected $regionRepository;

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
        $this->regions = new ObjectStorage();
        $this->countryGroups = new ObjectStorage();
    }

    /**
     * Gets the country's name.
     *
     * @return string|null The country's name
     */
    public function getName(): ?string
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
     * Gets the country's label.
     *
     * @return string|null The country's label
     */
    public function getLabel(): ?string
    {
        return empty($this->label) ? $this->name : $this->label;
    }

    /**
     * Sets the country's label.
     *
     * @param string $label The country's label
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the regions belonging to the country.
     *
     * @param bool $reverse Reverse search, defaults to `false`
     * @return ObjectStorage|QueryResult|null The regions belonging to the country
     * @throws InvalidQueryException
     */
    public function getRegions(bool $reverse = false)
    {
        if ($reverse) {
            return $this->regionRepository->findByCountry($this);
        }

        return $this->regions;
    }

    /**
     * Sets the regions belonging to the country.
     *
     * @param ObjectStorage<Region>|null $regions The regions belonging to the country
     */
    public function setRegions(?ObjectStorage $regions): void
    {
        $this->regions = $regions;
    }

    /**
     * Adds a region to the country.
     *
     * @param Region $region The region to be added
     */
    public function addRegion(Region $region): void
    {
        $this->regions->attach($region);
    }

    /**
     * Removes a region from the country.
     *
     * @param Region $region The region to be removed
     */
    public function removeRegion(Region $region): void
    {
        $this->regions->detach($region);
    }

    /**
     * Removes all regions from the country.
     */
    public function removeAllRegions(): void
    {
        $this->regions = new ObjectStorage();
    }

    /**
     * Gets the country groups belonging to the country.
     *
     * @param bool $reverse Reverse search, defaults to `false`
     * @return ObjectStorage|QueryResult|null The country groups belonging to the country
     * @throws InvalidQueryException
     */
    public function getCountryGroups(bool $reverse = false)
    {
        if ($reverse) {
            return $this->countryGroupRepository->findByCountry($this);
        }

        return $this->countryGroups;
    }

    /**
     * Sets the country groups belonging to the country.
     *
     * @param ObjectStorage<CountryGroup>|null $countryGroups The country groups belonging to the country
     */
    public function setCountryGroups(?ObjectStorage $countryGroups): void
    {
        $this->countryGroups = $countryGroups;
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
     * Gets the country's description.
     *
     * @return string|null The country's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the country's description.
     *
     * @param string $description The country's description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the country's item property.
     *
     * @return string The country's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }

    /**
     * Injects the region repository.
     *
     * @param RegionRepository $regionRepository The region repository
     */
    public function injectRegionRepository(RegionRepository $regionRepository): void
    {
        $this->countryGroupRepository = $regionRepository;
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
}
