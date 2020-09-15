<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The theme class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Theme extends AbstractEntity
{
    /**
     * The theme's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The theme's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * Returns the theme's name.
     *
     * @return string The theme's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the theme's name.
     *
     * @param string $name The theme's name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the theme's abstract.
     *
     * @return string The theme's abstract
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * Sets the theme's abstract.
     *
     * @param string $abstract The theme's abstract
     */
    public function setAbstract($abstract): void
    {
        $this->abstract = $abstract;
    }
}
