<?php
namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use T3v\T3vCore\Domain\Repository\Traits\LocalizationTrait;

/**
 * Department Repository Class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class DepartmentRepository extends AbstractRepository
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

  /**
   * Use the localization trait.
   */
  use LocalizationTrait;
}
