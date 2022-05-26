<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Variable;

use FluidTYPO3\Vhs\ViewHelpers\Variable\ConvertViewHelper as VhsConvertViewHelper;

/**
 * The convert view helper class.
 *
 * Converts $value to $type which can be one of 'string', 'integer', 'float', 'boolean', 'array' or 'ObjectStorage'.
 * If $value is NULL sensible defaults are assigned or $default which obviously has to be of $type as well.
 *
 * @package T3v\T3vBase\ViewHelpers\Variable
 */
class ConvertViewHelper extends VhsConvertViewHelper
{
}
