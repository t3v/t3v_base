<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\Country;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * Country Group Repository Class
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class CountryGroupRepository extends AbstractRepository
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
     * Finds country groups by country.
     *
     * @param \T3v\T3vBase\Domain\Model\Country $country The country
     * @param bool $respectSysLanguage Respect the system language, defaults to `false`
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array The found country groups
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @noinspection PhpFullyQualifiedNameUsageInspection
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function findByCountry(Country $country, bool $respectSysLanguage = false)
    {
        $query = $this->createQuery();
        $settings = $query->getQuerySettings();
        $settings->setRespectSysLanguage($respectSysLanguage);

        $query->matching($query->contains('countries', $country));

        return $query->execute();
    }
}
