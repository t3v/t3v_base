<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Menu;

use FluidTYPO3\Vhs\ViewHelpers\Menu\SubViewHelper as VhsSubViewHelper;

/**
 * The sub view helper class.
 *
 * Recycles the parent menu view helper instance, resetting the page UID used as starting point and repeating rendering of the exact same
 * tag content.
 *
 * @package T3v\T3vBase\ViewHelpers\Menu
 */
class SubViewHelper extends VhsSubViewHelper
{
}
