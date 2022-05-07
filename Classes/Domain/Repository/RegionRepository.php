<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\Country;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The region repository class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class RegionRepository extends BaseRepository
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
     * Finds regions by a country.
     *
     * @param Country $country The country
     * @return QueryResultInterface|array The found regions
     * @throws InvalidQueryException
     */
    public function findByCountry(Country $country)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('countries', $country));

        return $query->execute();
    }
}
