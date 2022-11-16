<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Context;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Context\IsFrontendViewHelper as VhsIsFrontendViewHelper;

/**
 * The is frontend view helper class.
 *
 * A condition view helper which renders the `then` child if the current context being rendered is frontend.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Context
 */
class IsFrontendViewHelper extends VhsIsFrontendViewHelper
{
}
