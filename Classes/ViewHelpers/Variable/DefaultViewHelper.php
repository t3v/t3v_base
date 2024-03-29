<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Variable;

use Closure;
use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * The default view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers\Variable
 */
class DefaultViewHelper extends AbstractViewHelper
{
    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('value', 'mixed', 'The value');
        $this->registerArgument('default', 'mixed', 'The default value, defaults to `-`', false, '-');
    }

    /**
     * The view helper render static function.
     *
     * @param array $arguments The arguments
     * @param Closure $renderChildrenClosure The render children closure
     * @param RenderingContextInterface $renderingContext The rendering context
     * @return string The value if available, otherwise the default one
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): string {
        return $arguments['value'] ?: $arguments['default'];
    }
}
