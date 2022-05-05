<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The theme class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Theme extends BaseModel
{
    /**
     * The theme's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The theme's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Returns the theme's name.
     *
     * @return string|null The theme's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the theme's name.
     *
     * @param string $name The theme's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the theme's description.
     *
     * @return string|null The theme's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the theme's description.
     *
     * @param string $description The theme's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
