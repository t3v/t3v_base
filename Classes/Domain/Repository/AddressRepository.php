<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * The address repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class AddressRepository extends BaseRepository
{
    /**
     * The default orderings.
     *
     * @var array
     */
    protected $defaultOrderings = [
        'locality' => QueryInterface::ORDER_DESCENDING,
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];
}
