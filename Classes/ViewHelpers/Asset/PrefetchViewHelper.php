<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Asset;

use FluidTYPO3\Vhs\ViewHelpers\Asset\PrefetchViewHelper as VhsPrefetchViewHelper;

/**
 * The prefetch view helper class.
 *
 * Enables the special `<link rel="dns-prefetch" />` tag which instructs the browser to start prefetching DNS records for every domain
 * listed in the `domains` attribute of this view helper.
 *
 * @package T3v\T3vBase\ViewHelpers\Asset
 */
class PrefetchViewHelper extends VhsPrefetchViewHelper
{
}
