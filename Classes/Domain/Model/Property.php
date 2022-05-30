<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The property class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Property extends BaseModel
{
    /**
     * The properties' name.
     *
     * @var string
     */
    protected $name;

    /**
     * The properties' label.
     *
     * @var string
     */
    protected $label;

    /**
     * The properties' text.
     *
     * @var string
     */
    protected $text;

    /**
     * The properties' rich text.
     *
     * @var string
     */
    protected $richText;

    /**
     * The properties' description.
     *
     * @var string
     */
    protected $description;


    /**
     * Gets the properties' name.
     *
     * @return string|null The properties' name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the properties' name.
     *
     * @param string $name The properties' name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the properties' label.
     *
     * @return string|null The properties' label
     */
    public function getLabel(): ?string
    {
        return empty($this->label) ? $this->name : $this->label;
    }

    /**
     * Sets the properties' label.
     *
     * @param string $label The properties' label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the properties' text.
     *
     * @return string|null The properties' text
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Sets the properties' text.
     *
     * @param string $text The properties' text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * Gets the properties' rich text.
     *
     * @return string|null The properties' rich text
     */
    public function getRichText(): ?string
    {
        return $this->richText;
    }

    /**
     * Sets the properties' rich text.
     *
     * @param string $richText The properties' rich text
     */
    public function setRichText(string $richText): void
    {
        $this->richText = $richText;
    }

    /**
     * Gets the properties' description.
     *
     * @return string|null The properties' description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the properties' description.
     *
     * @param string $description The properties' description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
