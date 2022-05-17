<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The address class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Address extends BaseModel
{
    /**
     * The address's item property.
     */
    public const ITEM_PROPERTY = 'address';

    /**
     * The address's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The address's street.
     *
     * @var string
     */
    protected $street;

    /**
     * The address's street number.
     *
     * @var string
     */
    protected $streetNumber;

    /**
     * The address's postal code.
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The address's locality.
     *
     * @var string
     */
    protected $locality;

    /**
     * The address's region.
     *
     * @var \T3v\T3vBase\Domain\Model\Region
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    protected $region;

    /**
     * The address's country.
     *
     * @var \T3v\T3vBase\Domain\Model\Country
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    protected $country;

    /**
     * The address's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the address's label.
     *
     * @return string|null The address's label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets the address's label.
     *
     * @param string $label The address's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the address's street.
     *
     * @return string|null The address's street
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets the address's street.
     *
     * @param string $street The address's street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * Gets the address's street number.
     *
     * @return string|null The address's street number
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * Sets the address's street number.
     *
     * @param string $streetNumber The address's street number
     */
    public function setStreetNumber(string $streetNumber): void
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * Gets the address's street and street number.
     *
     * @return string|null The address's street and street number
     */
    public function getStreetAndStreetNumber(): ?string
    {
        $street = $this->getStreet();
        $streetNumber = $this->getStreetNumber();
        $streetAndStreetNumber = $street;

        if ($streetNumber) {
            $streetAndStreetNumber = "$street $streetNumber";
        }

        return $streetAndStreetNumber;
    }

    /**
     * Gets the address's street address respectively the street and street number.
     *
     * Alias for the `getStreetAndStreetNumber` function.
     *
     * @return string|null The address's street address
     */
    public function getStreetAddress(): ?string
    {
        return $this->getStreetAndStreetNumber();
    }

    /**
     * Gets the address's postal code.
     *
     * @return string|null The address's postal code
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Gets the address's post code.
     *
     * Alias for the `getPostalCode` function.
     *
     * @return string|null The address's post code
     */
    public function getPostCode(): ?string
    {
        return $this->getPostalCode();
    }

    /**
     * Sets the address's postal code.
     *
     * @param string $postalCode The address's postal code
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Sets the address's post code.
     *
     * Alias for the `setPostalCode` function.
     *
     * @param string $postCode The address's post code
     */
    public function setPostCode(string $postCode): void
    {
        $this->setPostalCode($postCode);
    }

    /**
     * Gets the address's locality.
     *
     * @return string|null The address's locality
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * Gets the address's city.
     *
     * Alias for the `getLocality` function.
     *
     * @return string|null The address's city
     */
    public function getCity(): ?string
    {
        return $this->getLocality();
    }

    /**
     * Gets the address's address locality.
     *
     * Alias for the `getLocality` function.
     *
     * @return string|null The address's address locality
     */
    public function getAddressLocality(): ?string
    {
        return $this->getLocality();
    }

    /**
     * Sets the address's locality.
     *
     * @param string $locality The address's locality
     */
    public function setLocality(string $locality): void
    {
        $this->locality = $locality;
    }

    /**
     * Sets the address's city.
     *
     * Alias for the `setLocality` function.
     *
     * @param string $city The address's city
     */
    public function setCity(string $city): void
    {
        $this->setLocality($city);
    }

    /**
     * Sets the address's address locality.
     *
     * Alias for the `setLocality` function.
     *
     * @param string $addressLocality The address's address locality
     */
    public function setAddressLocality(string $addressLocality): void
    {
        $this->setLocality($addressLocality);
    }

    /**
     * Gets the address's region.
     *
     * @return Region|null The address's region
     */
    public function getRegion(): ?Region
    {
        return $this->region;
    }

    /**
     * Gets the address's address region.
     *
     * @return string|null The address's address region
     */
    public function getAddressRegion(): ?string
    {
        $region = $this->getRegion();

        if ($region) {
            return $region->getName();
        }

        return null;
    }

    /**
     * Sets the address's region.
     *
     * @param Region|null $region The address's region
     */
    public function setRegion(?Region $region): void
    {
        $this->region = $region;
    }

    /**
     * Gets the address's country.
     *
     * @return Country|null The address's country
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * Gets the address's address country.
     *
     * @return string|null The address's address country
     */
    public function getAddressCountry(): ?string
    {
        $country = $this->getCountry();

        if ($country) {
            return $country->getName();
        }

        return null;
    }

    /**
     * Sets the address's country.
     *
     * @param Country|null $country The address's country
     */
    public function setCountry(?Country $country): void
    {
        $this->country = $country;
    }

    /**
     * Gets the address's description.
     *
     * @return string|null The address's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the address's description.
     *
     * @param string $description The address's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the address's item property.
     *
     * @return string The address's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
