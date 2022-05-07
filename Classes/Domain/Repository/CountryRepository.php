<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\CountryGroup;
use T3v\T3vBase\Domain\Model\Region;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The country repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class CountryRepository extends BaseRepository
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
     * Finds countries by a country group.
     *
     * @param CountryGroup $countryGroup The country group
     * @return QueryResultInterface|array The found countries
     * @throws InvalidQueryException
     */
    public function findByCountryGroup(CountryGroup $countryGroup)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('countryGroups', $countryGroup));

        return $query->execute();
    }

    /**
     * Finds countries by a region.
     *
     * @param Region $region The region
     * @return QueryResultInterface|array The found countries
     * @throws InvalidQueryException
     */
    public function findByRegion(Region $region)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('regions', $region));

        return $query->execute();
    }
}
