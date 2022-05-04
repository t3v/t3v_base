<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\Country;
use T3v\T3vBase\Domain\Repository\Traits\LocalizationTrait;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The country group repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class CountryGroupRepository extends AbstractRepository
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
        'name' => QueryInterface::ORDER_ASCENDING,
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];

    /**
     * Finds country groups by a country.
     *
     * @param Country $country The country
     * @return QueryResultInterface|array The found country groups
     * @throws InvalidQueryException
     */
    public function findByCountry(Country $country)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('countries', $country));

        return $query->execute();
    }
}
