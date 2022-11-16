<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Form;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Form\IsRequiredViewHelper as VhsIsRequiredViewHelper;

/**
 * The is required view helper class.
 *
 * Takes a property (dotted path supported) and renders the `then` child if the property at the given path has an `@validate NotEmpty`
 * annotation.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Form
 */
class IsRequiredViewHelper extends VhsIsRequiredViewHelper
{
}
