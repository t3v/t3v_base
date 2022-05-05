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
     * The email address's address.
     *
     * @var string
     */
    protected $address;

    /**
     * The email address's note.
     *
     * @var string
     */
    protected $note;

    /**
     * Returns the email address's address.
     *
     * @return string The email address's address
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Sets the email address's address.
     *
     * @param string $address The email address's address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * Returns the email address's note.
     *
     * @return string The email address's note
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * Sets the email address's note.
     *
     * @param string $note The email address's note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * Returns the email address's item property (Microdata).
     *
     * @return string The email address's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
