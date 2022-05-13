<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The email address class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class EmailAddress extends BaseModel
{
    /**
     * The email address's item property.
     */
    public const ITEM_PROPERTY = 'email';

    /**
     * The email address's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The email address's address.
     *
     * @var string
     */
    protected $address;

    /**
     * The email address's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the email address's label.
     *
     * @return string|null The email address's label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets the email address's label.
     *
     * @param string $label The email address's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the email address's address.
     *
     * @return string|null The email address's address
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets the email address's address.
     *
     * @param string $address The email address's address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * Gets the email address's description.
     *
     * @return string|null The email address's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the email address's description.
     *
     * @param string $description The email address's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the email address's item property.
     *
     * @return string The email address's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
