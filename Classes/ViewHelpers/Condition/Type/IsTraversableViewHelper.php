<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Type;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Type\IsTraversableViewHelper as VhsIsTraversableViewHelper;

/**
 * The is traversable view helper class.
 *
 * A condition view helper which renders the `then` child if the provided value implements the interface `Traversable`.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Type
 */
class IsTraversableViewHelper extends VhsIsTraversableViewHelper
{
}
