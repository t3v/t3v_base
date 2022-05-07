<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * The theme repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class ThemeRepository extends BaseRepository
{
    /**
     * The default orderings.
     *
     * @var array
     */
    protected $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING,
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];
}
