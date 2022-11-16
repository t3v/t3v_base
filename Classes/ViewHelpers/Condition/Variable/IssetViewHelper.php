<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Variable;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Variable\IssetViewHelper as VhsIssetViewHelper;

/**
 * The isset view helper class.
 *
 * A condition view helper which renders the `then` child if the variable name given in the `name` argument exists in the template.
 *
 * The value can be zero, an empty string or NULL, but the view helper will still return TRUE if the variable exists.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Variable
 */
class IssetViewHelper extends VhsIssetViewHelper
{
}
