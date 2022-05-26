<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers;

use FluidTYPO3\Vhs\ViewHelpers\TagViewHelper as VhsTagViewHelper;

/**
 * The tag view helper class.
 *
 * Creates one HTML tag of any type, with various properties like class and ID applied only if arguments are not empty, rather than apply
 * them always - empty or not - if provided. *
 *
 * @package T3v\T3vBase\ViewHelpers
 */
class TagViewHelper extends VhsTagViewHelper
{
}
