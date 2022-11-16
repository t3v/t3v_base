<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\String;

use FluidTYPO3\Vhs\ViewHelpers\Condition\String\IsLowercaseViewHelper as VhsIsLowercaseViewHelper;

/**
 * The is lowercase view helper class.
 *
 * A condition view helper which renders the `then` child if the provided string is lowercase.
 *
 * By default, only the first letter is tested. To test the full string, set `$fullString`.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\String
 */
class IsLowercaseViewHelper extends VhsIsLowercaseViewHelper
{
}
