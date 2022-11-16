<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Condition\Page;

use FluidTYPO3\Vhs\ViewHelpers\Condition\Page\IsLanguageViewHelper as VhsIsLanguageViewHelper;

/**
 * The is language view helper class.
 *
 * A condition view helper which renders the `then` child if the current language matches the provided language UID or language title.
 *
 * When using language titles like `en` it is required to provide a default title to distinguish between the standard and a non-existing
 * language.
 *
 * @package T3v\T3vBase\ViewHelpers\Condition\Page
 */
class IsLanguageViewHelper extends VhsIsLanguageViewHelper
{
}
