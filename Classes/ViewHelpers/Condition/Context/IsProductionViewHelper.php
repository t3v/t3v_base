<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Context;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Context\IsProductionViewHelper as VhsIsProductionViewHelper;

/**
 * The is production view helper class.
 *
 * Returns true if the current root application context is production otherwise false. If no application context has been set, then this is
 * the default context.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Context
 */
class IsProductionViewHelper extends VhsIsProductionViewHelper
{
}
