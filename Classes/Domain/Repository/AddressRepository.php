<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Repository\Traits\LocalizationTrait;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * The address repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class AddressRepository extends AbstractRepository
{
    /**
     * Use the localization trait.
     */
    use LocalizationTrait;

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
