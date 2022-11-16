<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Page;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Page\IsChildPageViewHelper as VhsIsChildPageViewHelper;

/**
 * The is child page view helper class.
 *
 * A condition view helper which renders the `then` child if the current page or the page with provided UID is a child of some other page in
 * the page tree. If `$respectSiteRoot` is set, root pages are never considered child pages even if they are.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Page
 */
class IsChildPageViewHelper extends VhsIsChildPageViewHelper
{
}
