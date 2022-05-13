<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The phone number class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class PhoneNumber extends BaseModel
{
    /**
     * The phone number's types.
     */
    public const FAX_TYPE = 'FAX';
    public const PAGER_TYPE = 'PAGER';
    public const TELEPHONE_TYPE = 'TELEPHONE';

    /**
     * The phone number's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The phone number's number.
     *
     * @var string
     */
    protected $number;

    /**
     * The phone number's international number.
     *
     * @var string
     */
    protected $internationalNumber;

    /**
     * The phone number's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the phone number's label.
     *
     * @return string|null The phone number's label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets the phone number's label.
     *
     * @param string $label The phone number's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the phone number's number.
     *
     * @return string|null The phone number's number
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets the phone number's number.
     *
     * @param string $number The phone number's number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Gets the phone number's international number.
     *
     * @return string|null The phone number's international number
     */
    public function getInternationalNumber(): ?string
    {
        return $this->internationalNumber;
    }

    /**
     * Sets the phone number's international number.
     *
     * @param string $internationalNumber The phone number's international number
     */
    public function setInternationalNumber(string $internationalNumber): void
    {
        $this->internationalNumber = $internationalNumber;
    }

    /**
     * Gets the phone number's description.
     *
     * @return string|null The phone number's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the phone number's description.
     *
     * @param string $description The phone number's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the phone number's item property.
     *
     * @return string The phone number's item property
     */
    public function getItemProperty(): string
    {
        $itemProperty = 'telephone';

        switch ($this->getType()) {
            case self::FAX_TYPE:
                return 'faxNumber';

            case self::PAGER_TYPE:
                return 'pagerNumber';
        }

        return $itemProperty;
    }
}
