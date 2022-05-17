<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The style class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class Style extends BaseModel
{
    /**
     * The style's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The style's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The style's selector.
     *
     * @var string
     */
    protected $selector;

    /**
     * The style's background color.
     *
     * @var string
     */
    protected $backgroundColor;

    /**
     * The style's background images.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @Extbase\Annotation\ORM\Lazy
     * @Extbase\Annotation\ORM\Cascade("remove")
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    protected $backgroundImages;

    /**
     * The style's color.
     *
     * @var string
     */
    protected $color;

    /**
     * The style's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Constructs a new style.
     */
    public function __construct()
    {
        $this->backgroundImages = new ObjectStorage();
    }

    /**
     * Returns the style's name.
     *
     * @return string|null The style's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the style's name.
     *
     * @param string $name The style's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the style's label.
     *
     * @return string|null The style's label
     */
    public function getLabel(): ?string
    {
        return $this->label ?? $this->name;
    }

    /**
     * Sets the style's label.
     *
     * @param string $label The style's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns the style's selector.
     *
     * @return string|null The style's selector
     */
    public function getSelector(): ?string
    {
        return $this->selector;
    }

    /**
     * Sets the style's selector.
     *
     * @param string $selector The style's selector
     */
    public function setSelector(string $selector): void
    {
        $this->selector = $selector;
    }

    /**
     * Returns the style's background color.
     *
     * @return string|null The style's background color
     */
    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    /**
     * Sets the style's background color.
     *
     * @param string $backgroundColor The style's background color
     */
    public function setBackgroundColor(string $backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * Returns all background images belonging to the style.
     *
     * @return ObjectStorage<FileReference>|null The style's background images
     */
    public function getBackgroundImages(): ?ObjectStorage
    {
        return $this->backgroundImages;
    }

    /**
     * Gets the first background image from the style.
     *
     * @return DomainObjectInterface|null The first background image or null if no background image was found
     */
    public function getFirstBackgroundImage(): ?DomainObjectInterface
    {
        $backgroundImages = $this->getBackgroundImages();

        if ($backgroundImages) {
            return $backgroundImages->current();
        }

        return null;
    }

    /**
     * Sets the style's background images.
     *
     * @param ObjectStorage<FileReference>|null $backgroundImages The style's background images
     */
    public function setBackgroundImages(?ObjectStorage $backgroundImages): void
    {
        $this->backgroundImages = $backgroundImages;
    }

    /**
     * Adds a background image to the style.
     *
     * @param FileReference $backgroundImage The background image to be added
     */
    public function addBackgroundImage(FileReference $backgroundImage): void
    {
        $this->backgroundImages->attach($backgroundImage);
    }

    /**
     * Removes a background image from the style.
     *
     * @param FileReference $backgroundImage The background image to be removed
     */
    public function removeBackgroundImage(FileReference $backgroundImage): void
    {
        $this->backgroundImages->detach($backgroundImage);
    }

    /**
     * Removes all background images from the style.
     *
     * @return void
     */
    public function removeAllBackgroundImages(): void
    {
        $this->backgroundImages = new ObjectStorage();
    }

    /**
     * Returns the style's color.
     *
     * @return string|null The style's color
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * Sets the style's color.
     *
     * @param string $color The style's color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * Returns the style's description.
     *
     * @return string|null The style's description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the style's description.
     *
     * @param string $description The style's description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
