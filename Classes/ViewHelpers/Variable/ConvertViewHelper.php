<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Variable;

use Closure;
use FluidTYPO3\Vhs\ViewHelpers\Variable\ConvertViewHelper as VhsConvertViewHelper;
use RuntimeException;
use Traversable;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * The convert view helper class.
 *
 * Converts `$value` to `$type` which can be one of 'array', 'boolean', 'float', 'integer', 'ObjectStorage' or 'string'.
 * If the value is empty, sensible defaults or `$default` (which obviously has to be of `$type` as well) are assigned.
 *
 * @package T3v\T3vBase\ViewHelpers\Variable
 */
class ConvertViewHelper extends VhsConvertViewHelper
{
    /**
     * The view helper render static function.
     *
     * @param array $arguments The arguments
     * @param Closure $renderChildrenClosure The render children closure
     * @param RenderingContextInterface $renderingContext The rendering context
     * @return mixed The value
     */
    public static function renderStatic(array $arguments, Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $value = $renderChildrenClosure();
        $type = $arguments['type'];

        if (!empty($value) && gettype($value) === $type) {
            return $value;
        }

        if (!empty($value)) {
            if ($type === 'ObjectStorage' && is_array($value)) {
                /** @var ObjectStorage $storage */
                $storage = GeneralUtility::makeInstance(ObjectStorage::class);

                foreach ($value as $item) {
                    $storage->attach($item);
                }

                $value = $storage;
            } elseif ($type === 'array' && $value instanceof Traversable) {
                $value = iterator_to_array($value, false);
            } elseif ($type === 'array') {
                $value = [$value];
            } else {
                settype($value, $type);
            }
        } elseif (isset($arguments['default'])) {
            $default = $arguments['default'];

            if (gettype($default) !== $type) {
                throw new RuntimeException('Supplied argument "default" is not of the type "' . $type . '"', 1364542576);
            }

            $value = $default;
        } else {
            switch ($type) {
                case 'array':
                    $value = [];

                    break;

                case 'boolean':
                    $value = false;

                    break;

                case 'float':
                    $value = 0.0;

                    break;

                case 'integer':
                    $value = 0;

                    break;

                case 'ObjectStorage':
                    $value = GeneralUtility::makeInstance(ObjectStorage::class);

                    break;

                case 'string':
                    $value = '';

                    break;

                default:
                    throw new RuntimeException('Provided argument "type" is not valid', 1364542884);
            }
        }

        return $value;
    }
}
