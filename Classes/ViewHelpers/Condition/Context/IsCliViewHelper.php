<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Context;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Context\IsCliViewHelper as VhsIsCliViewHelper;

/**
 * The is CLI view helper class.
 *
 * A condition view helper which renders the `then` child if the current context being rendered is CLI.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Context
 */
class IsCliViewHelper extends VhsIsCliViewHelper
{
}
