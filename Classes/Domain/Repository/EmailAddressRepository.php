<?php
namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use T3v\T3vCore\Domain\Repository\Traits\LocalizationTrait;

/**
 * Email Address Repository Class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class EmailAddressRepository extends AbstractRepository
{
  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'address' => QueryInterface::ORDER_DESCENDING,
    'sorting' => QueryInterface::ORDER_ASCENDING
  ];

  /**
   * Use the localization trait.
   */
  use LocalizationTrait;
}
