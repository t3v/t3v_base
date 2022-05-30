<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The format class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Format extends BaseModel
{
    /**
     * The format's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The format's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The format's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the format's name.
     *
     * @return string|null The format's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the format's name.
     *
     * @param string $name The format's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the format's label.
     *
     * @return string|null The format's label
     */
    public function getLabel(): ?string
    {
        return empty($this->label) ? $this->name : $this->label;
    }

    /**
     * Sets the format's label.
     *
     * @param string $label The format's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the format's description.
     *
     * @return string|null The format's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the format's description.
     *
     * @param string $description The format's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
