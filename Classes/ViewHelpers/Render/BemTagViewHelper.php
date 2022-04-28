<?php
namespace T3v\T3vBase\ViewHelpers\Render;

use FluidTYPO3\Vhs\ViewHelpers\TagViewHelper;
use T3v\T3vCore\ViewHelpers\Helpers\ArgumentTypeHelper;

/**
 * The BEM tag view helper class.
 *
 * @package T3v\T3vBase\ViewHelper\Renders
 */
class BemTagViewHelper extends TagViewHelper
{
    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument(
            'block',
            ArgumentTypeHelper::TYPE_STRING,
            'The standalone entity that is meaningful on its own'
        );

        $this->registerArgument(
            'element',
            ArgumentTypeHelper::TYPE_STRING,
            'The part of a block that has no standalone meaning and is semantically tied to its block'
        );

        $this->registerArgument(
            'modifier',
            ArgumentTypeHelper::TYPE_STRING,
            'The flag on a block or element, use them to change appearance or behavior'
        );
    }

    /**
     * The view helper render function.
     *
     * @return string The rendered BEM tag
     */
    public function render(): string
    {
        $this->arguments['class'] = trim((string)$this->arguments['class']);
        $this->arguments['class'] = str_replace(',', ' ', $this->arguments['class']);

        if ($this->arguments['block']) {
            $this->arguments['class'] .= ' ' . $this->arguments['block'];

            if ($this->arguments['element']) {
                $this->arguments['class'] .= '__' . $this->arguments['element'];
            }

            if ($this->arguments['modifier']) {
                $this->arguments['class'] .= '--' . $this->arguments['modifier'];
            }
        }

        $content = $this->renderChildren();

        return $this->renderTag($this->arguments['name'], $content);
    }
}
