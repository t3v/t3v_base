<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Page;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Page\HasSubpagesViewHelper as VhsHasSubpagesViewHelper;

/**
 * The has subpages view helper class.
 *
 * A condition view helper which renders the `then` child if current page or page with provided UID has subpages.
 *
 * By default, disabled subpages are considered non-existent which can be overridden by the setting `$includeHidden`. To include pages that
 * are hidden in menus set `$showHiddenInMenu`.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Page
 */
class HasSubpagesViewHelper extends VhsHasSubpagesViewHelper
{
}
