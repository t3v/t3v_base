<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vBase\Domain\Repository\CountryRepository;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The region class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Region extends BaseModel
{
    /**
     * The region's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The region's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The region's countries.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3v\T3vBase\Domain\Model\Country>
     * @Extbase\ORM\Lazy
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    protected $countries;

    /**
     * The region's description.
     *
     * @var string
     */
    protected $description;

    /**
     * The country repository.
     *
     * @var CountryRepository
     */
    public $countryRepository;

    /**
     * Constructs a new region.
     */
    public function __construct()
    {
        $this->countries = new ObjectStorage();
    }

    /**
     * Gets the region's name.
     *
     * @return string|null The region's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the region's name.
     *
     * @param string $name The region's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the region's label.
     *
     * @return string|null The region's label
     */
    public function getLabel(): ?string
    {
        return $this->label ?? $this->name;
    }

    /**
     * Sets the region's label.
     *
     * @param string $label The region's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the countries belonging to the region.
     *
     * @param bool $reverse Reverse search, defaults to `false`
     * @return QueryResult|ObjectStorage|null The countries belonging to the region
     * @throws InvalidQueryException
     */
    public function getCountries(bool $reverse = false)
    {
        if ($reverse) {
            return $this->countryRepository->findByRegion($this);
        }

        return $this->countries;
    }

    /**
     * Sets the countries belonging to the region.
     *
     * @param ObjectStorage<Country> $countries The countries belonging to the region
     */
    public function setCountries(ObjectStorage $countries): void
    {
        $this->countries = $countries;
    }

    /**
     * Adds a country to the region.
     *
     * @param Country $country The country to be added
     */
    public function addCountry(Country $country): void
    {
        $this->countries->attach($country);
    }

    /**
     * Removes a country from the region.
     *
     * @param Country $country The country to be removed
     */
    public function removeCountry(Country $country): void
    {
        $this->countries->detach($country);
    }

    /**
     * Removes all countries from the region.
     */
    public function removeAllCountries(): void
    {
        $this->countries = new ObjectStorage();
    }

    /**
     * Gets the region's description.
     *
     * @return string|null The region's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the region's description.
     *
     * @param string $description The region's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Injects the country repository.
     *
     * @var CountryRepository The country repository
     */
    public function injectCountryRepository(CountryRepository $countryRepository): void
    {
        $this->countryRepository = $countryRepository;
    }
}
