<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Type;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Type\IsDomainObjectViewHelper as VhsIsDomainObjectViewHelper;

/**
 * The is domain object view helper class.
 *
 * A condition view helper which renders the `then` child if the provided value is a domain object, i.e. it inherits from Extbase's base
 * class.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Type
 */
class IsDomainObjectViewHelper extends VhsIsDomainObjectViewHelper
{
}
