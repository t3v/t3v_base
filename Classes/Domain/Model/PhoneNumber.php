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
    const FAX_TYPE = 'FAX';
    const PAGER_TYPE = 'PAGER';
    const TELEPHONE_TYPE = 'TELEPHONE';

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
     * The phone number's note.
     *
     * @var string
     */
    protected $note;

    /**
     * Returns the phone number's label.
     *
     * @return string The phone number's label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the phone number's label.
     *
     * @param string $label The phone number's label
     * @return void
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Returns the phone number's number.
     *
     * @return string The phone number's number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the phone number's number.
     *
     * @param string $number The phone number's number
     * @return void
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Returns the phone number's international number.
     *
     * @return string The phone number's international number
     */
    public function getInternationalNumber()
    {
        return $this->internationalNumber;
    }

    /**
     * Sets the phone number's international number.
     *
     * @param string $internationalNumber The phone number's international number
     * @return void
     */
    public function setInternationalNumber($internationalNumber)
    {
        $this->internationalNumber = $internationalNumber;
    }

    /**
     * Returns the phone number's note.
     *
     * @return string The phone number's note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the phone number's note.
     *
     * @param string $note The phone number's note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Returns the phone number's item property (Microdata).
     *
     * @return string The phone number's item property
     */
    public function getItemProperty()
    {
        $itemProperty = 'telephone';

        $type = $this->getType();

        switch ($type) {
            case self::FAX_TYPE:
                $itemProperty = 'faxNumber';

                break;

            case self::PAGER_TYPE:
                $itemProperty = 'pagerNumber';

                break;
        }

        return $itemProperty;
    }
}
