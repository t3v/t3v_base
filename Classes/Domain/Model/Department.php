<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The department class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Department extends BaseModel
{
    /**
     * The department's item property.
     */
    public const ITEM_PROPERTY = 'department';

    /**
     * The department's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The department's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The department's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the department's name.
     *
     * @return string|null The department's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the department's name.
     *
     * @param string $name The department's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the department's label.
     *
     * @return string|null The department's label
     */
    public function getLabel(): ?string
    {
        return $this->label ?? $this->name;
    }

    /**
     * Sets the department's label.
     *
     * @param string $label The department's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets the department's description.
     *
     * @return string|null The department's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the department's description.
     *
     * @param string $description The department's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets the department's item property.
     *
     * @return string The department's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
