<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

/**
 * The format repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class FormatRepository extends AbstractRepository
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
