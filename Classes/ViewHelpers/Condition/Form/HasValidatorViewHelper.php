<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Form;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Form\HasValidatorViewHelper as VhsHasValidatorViewHelper;

/**
 * The has validator view helper class.
 *
 * Takes a property (dotted path supported) and renders the `then` child if the property at the given path has any `@validate` annotation.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Form
 */
class HasValidatorViewHelper extends VhsHasValidatorViewHelper
{
}
