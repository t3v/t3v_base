<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The department class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Department extends AbstractEntity
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
     * The department's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * Returns the department's name.
     *
     * @return string The department's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the department's name.
     *
     * @param string $name The department's name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the department's abstract.
     *
     * @return string The department's abstract
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * Sets the department's abstract.
     *
     * @param string $abstract The department's abstract
     */
    public function setAbstract($abstract): void
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns the department's item property (Microdata).
     *
     * @return string The department's item property
     */
    public function getItemProperty(): string
    {
        return self::ITEM_PROPERTY;
    }
}
