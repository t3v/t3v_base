<?php

namespace T3v\T3vBase\Domain\Model;


/**
 * Postal Address Class
 *
 * @package T3v\T3vBase\Domain\Model
 */
class PostalAddress extends AbstractEntity
{
    /**
     * The postal address's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The postal address's street.
     *
     * @var string
     */
    protected $street;

    /**
     * The postal address's street number.
     *
     * @var string
     */
    protected $streetNumber;

    /**
     * The postal address's postal code.
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The postal address's locality.
     *
     * @var string
     */
    protected $locality;

    /**
     * The postal address's region.
     *
     * @var \T3v\T3vBase\Domain\Model\Region
     */
    protected $region;

    /**
     * The postal address's country.
     *
     * @var \T3v\T3vBase\Domain\Model\Country
     */
    protected $country;

    /**
     * The postal address's note.
     *
     * @var string
     */
    protected $note;

    /**
     * Returns the postal address's label.
     *
     * @return string The postal address's label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the postal address's label.
     *
     * @param string $label The postal address's label
     * @return void
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Returns the postal address's street.
     *
     * @return string The postal address's street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the postal address's street.
     *
     * @param string $street The postal address's street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the postal address's street number.
     *
     * @return string The postal address's street number
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Sets the postal address's street number.
     *
     * @param string $street The postal address's street number
     * @return void
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * Returns the postal address's street and street number.
     *
     * @return string The address's street and street number
     */
    public function getStreetAndStreetNumber()
    {
        $street = $this->getStreet();
        $streetNumber = $this->getStreetNumber();

        $streetAddress = $street;

        if ($streetNumber) {
            $streetAddress = "{$street} {$streetNumber}";
        }

        return $streetAddress;
    }

    /**
     * Returns the postal address's street address (street and street number).
     *
     * Alias for `getStreetAndStreetNumber` function.
     *
     * @return string The postal address's street address
     */
    public function getStreetAddress()
    {
        return $this->getStreetAndStreetNumber();
    }

    /**
     * Returns the postal address's postal code.
     *
     * @return string The postal address's postal code
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Returns the postal address's post code.
     *
     * Alias for `getPostalCode` function.
     *
     * @return string The postal address's post code
     */
    public function getPostCode()
    {
        return $this->getPostalCode();
    }

    /**
     * Sets the postal address's postal code.
     *
     * @param string $postalCode The postal address's postal code
     * @return void
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Sets the postal address's post code.
     *
     * Alias for `setPostalCode` function.
     *
     * @param string $postCode The postal address's post code
     * @return void
     */
    public function setPostCode($postCode)
    {
        $this->setPostalCode($postCode);
    }

    /**
     * Returns the postal address's locality.
     *
     * @return string The postal address's locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Returns the postal address's city.
     *
     * Alias for `getLocality` function.
     *
     * @return string The postal address's city
     */
    public function getCity()
    {
        return $this->getLocality();
    }

    /**
     * Returns the postal address's address locality.
     *
     * Alias for `getLocality` function.
     *
     * @return string The postal address's address locality
     */
    public function getAddressLocality()
    {
        return $this->getLocality();
    }

    /**
     * Sets the postal address's locality.
     *
     * @param string $locality The postal address's locality
     * @return void
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * Sets the postal address's city.
     *
     * Alias for `setLocality` function.
     *
     * @param string $city The postal address's city
     * @return void
     */
    public function setCity($city)
    {
        $this->setLocality($city);
    }

    /**
     * Returns the postal address's region.
     *
     * @return \T3v\T3vBase\Domain\Model\Region The postal address's region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Returns the postal address's address region.
     *
     * @return string The postal address's address region
     */
    public function getAddressRegion()
    {
        $region = $this->getRegion();

        if ($region) {
            return $region->getName();
        }

        return null;
    }

    /**
     * Sets the postal address's region.
     *
     * @param \T3v\T3vBase\Domain\Model\Region $region The postal address's region
     * @return void
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Returns the postal address's country.
     *
     * @return \T3v\T3vBase\Domain\Model\Country The postal address's country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the postal address's address country.
     *
     * @return string The postal address's address country
     */
    public function getAddressCountry()
    {
        $country = $this->getCountry();

        if ($country) {
            return $country->getName();
        }

        return null;
    }

    /**
     * Sets the postal address's country.
     *
     * @param \T3v\T3vBase\Domain\Model\Country $country The postal address's country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the postal address's note.
     *
     * @return string The postal address's note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the postal address's note.
     *
     * @param string $note The postal address's note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
}
