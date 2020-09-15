<?php

namespace T3v\T3vBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use T3v\T3vBase\Domain\Model\CountryGroup;
use T3v\T3vBase\Domain\Model\Region;
use T3v\T3vBase\Domain\Repository\Traits\LocalizationTrait;

/**
 * Country Repository Class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class CountryRepository extends AbstractRepository
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
   * Returns all countries by the matching country group.
   *
   * @param \T3v\T3vBase\Domain\Model\CountryGroup $countryGroup The country group
   * @param boolean $respectSysLanguage Respect the system language, defaults to `false`
   * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface The found countries
   */
  public function findByCountryGroup(CountryGroup $countryGroup, $respectSysLanguage = false)
  {
    $query = $this->createQuery();

    $settings = $query->getQuerySettings();
    $settings->setRespectSysLanguage($respectSysLanguage);

    try {
      $query->matching($query->contains('countryGroups', $countryGroup));
    } catch (InvalidQueryException $e) {
      error_log($e->getMessage());
    }

    return $query->execute();
  }


  /**
   * Returns all countries by the matching region.
   *
   * @param \T3v\T3vBase\Domain\Model\Region $region The region
   * @param boolean $respectSysLanguage Respect the system language, defaults to `false`
   * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface The found countries
   */
  public function findByRegion(Region $region, $respectSysLanguage = false)
  {
    $query = $this->createQuery();

    $settings = $query->getQuerySettings();
    $settings->setRespectSysLanguage($respectSysLanguage);

    try {
      $query->matching($query->contains('regions', $region));
    } catch (InvalidQueryException $e) {
      error_log($e->getMessage());
    }

    return $query->execute();
  }
}
