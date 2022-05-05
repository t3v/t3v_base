<?php
namespace T3v\T3vBase\Domain\Model;

/**
 * The property class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Property extends BaseModel
{
    /**
     * The properties name.
     *
     * @var string
     */
    protected $name;

    /**
     * The properties label.
     *
     * @var string
     */
    protected $label;

    /**
     * The properties text.
     *
     * @var string
     */
    protected $text;

    /**
     * The properties rich text.
     *
     * @var string
     */
    protected $richText;

    /**
     * Returns the properties name.
     *
     * @return string The properties name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the properties name.
     *
     * @param string $name The properties name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the properties label.
     *
     * @return string The properties label
     */
    public function getLabel()
    {
        return $this->label ?? $this->name;
    }

    /**
     * Sets the properties label.
     *
     * @param string $label The properties label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Returns the properties text.
     *
     * @return string The properties text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the properties text.
     *
     * @param string $text The properties text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}
