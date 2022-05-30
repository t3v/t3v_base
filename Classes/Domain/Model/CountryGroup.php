<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vBase\Domain\Repository\CountryRepository;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The country group class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class CountryGroup extends BaseModel
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
     * The country group's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The country group's countries.
     *
     * @var ObjectStorage<Country>
     * @Extbase\ORM\Lazy
     */
    protected $countries;

    /**
     * The country group's description.
     *
     * @var string
     */
    protected $description;

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
        $this->countries = new ObjectStorage();
    }

    /**
     * Gets the country group's name.
     *
     * @return string|null The country group's name
     */
    public function getName(): ?string
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
     * Gets the country group's label.
     *
     * @return string|null The country group's label
     */
    public function getLabel(): ?string
    {
        return empty($this->label) ? $this->name : $this->label;
    }

    /**
     * Sets the country group's label.
     *
     * @param string $label The country group's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the countries belonging to the country group.
     *
     * @param bool $reverse Reverse search, defaults to `false`
     * @return ObjectStorage|QueryResult|null The countries belonging to the country group
     * @throws InvalidQueryException
     */
    public function getCountries(bool $reverse = false)
    {
        if ($reverse) {
            return $this->countryRepository->findByCountryGroup($this);
        }

        return $this->countries;
    }

    /**
     * Sets the countries belonging to the country group.
     *
     * @param ObjectStorage<Country>|null $countries The countries belonging to the country group
     */
    public function setProducts(?ObjectStorage $countries): void
    {
        $this->countries = $countries;
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
     * Gets the country group's description.
     *
     * @return string|null The country group's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the country group's description.
     *
     * @param string $description The country group's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the country group's item property.
     *
     * @return string The country group's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
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
}
