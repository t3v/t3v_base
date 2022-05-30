<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Iterator;

use FluidTYPO3\Vhs\ViewHelpers\Iterator\SortViewHelper as VhsSortViewHelper;

/**
 * The sort view helper class.
 *
 * Sorts an instance of `ObjectStorage`, an iterator implementation, an `Array` or a `QueryResult` (including lazy counterparts).
 *
 * Can be used inline, i.e.:
 *
 * <f:for each="{dataset -> b:iterator.sort(sortBy: 'name')}" as="item">
 *   // Iterating data which is only sorted while rendering this particular loop
 * </f:for>
 *
 * @package T3v\T3vBase\ViewHelpers\Iterator
 */
class SortViewHelper extends VhsSortViewHelper
{
}
