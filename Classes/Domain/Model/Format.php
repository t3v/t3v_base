<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

/**
 * The format class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Format extends AbstractEntity
{
    /**
     * The format's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The format's abstract.
     *
     * @var string
     */
    protected $abstract;

    /**
     * Returns the format's name.
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
     * Returns the format's abstract.
     *
     * @return string|null The format's abstract
     */
    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    /**
     * Sets the format's abstract.
     *
     * @param string $abstract The format's abstract
     */
    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }
}
