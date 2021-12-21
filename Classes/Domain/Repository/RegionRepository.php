<?php

namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use T3v\T3vBase\Domain\Model\Country;
use T3v\T3vCore\Domain\Repository\Traits\LocalizationTrait;

/**
 * Region Repository Class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class RegionRepository extends AbstractRepository
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


  /**
   * Returns all country groups by the matching country.
   *
   * @param \T3v\T3vBase\Domain\Model\Country $country The country
   * @param boolean $respectSysLanguage Respect the system language, defaults to `false`
   * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface The found country groups
   */
  public function findByCountry(Country $country, $respectSysLanguage = false)
  {
    $query = $this->createQuery();

    $settings = $query->getQuerySettings();
    $settings->setRespectSysLanguage($respectSysLanguage);

    try {
      $query->matching($query->contains('countries', $country));
    } catch (InvalidQueryException $e) {
      error_log($e->getMessage());
    }

    return $query->execute();
  }
}
