<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Context;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Context\IsTestingViewHelper as VhsIsTestingViewHelper;

/**
 * The is testing view helper class.
 *
 * Returns true if the current root application context is testing otherwise false. If no application context has been set, then the default
 * context is production.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Context
 */
class IsTestingViewHelper extends VhsIsTestingViewHelper
{
}
