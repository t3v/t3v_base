<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Context;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Context\IsBackendViewHelper as VhsIsBackendViewHelper;

/**
 * The is backend view helper class.
 *
 * A condition view helper which renders the `then` child if the current context being rendered is backend.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Context
 */
class IsBackendViewHelper extends VhsIsBackendViewHelper
{
}
