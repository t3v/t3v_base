<?php
namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\CountryGroup;
use T3v\T3vBase\Domain\Model\Region;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

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
    protected array $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING,
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];

    /**
     * Finds countries by country group
     *
     * @param \T3v\T3vBase\Domain\Model\CountryGroup $countryGroup The country group
     * @param bool $respectSysLanguage Respect the system language, defaults to `false`
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array The found countries
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @noinspection PhpFullyQualifiedNameUsageInspection
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function findByCountryGroup(CountryGroup $countryGroup, $respectSysLanguage = false)
    {
        $query = $this->createQuery();
        $settings = $query->getQuerySettings();
        $settings->setRespectSysLanguage($respectSysLanguage);

        $query->matching($query->contains('countryGroups', $countryGroup));

        return $query->execute();
    }

    /**
     * Finds countries by region
     *
     * @param \T3v\T3vBase\Domain\Model\Region $region The region
     * @param bool $respectSysLanguage Respect the system language, defaults to `false`
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array The found countries
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @noinspection PhpFullyQualifiedNameUsageInspection
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function findByRegion(Region $region, $respectSysLanguage = false)
    {
        $query = $this->createQuery();
        $settings = $query->getQuerySettings();
        $settings->setRespectSysLanguage($respectSysLanguage);

        $query->matching($query->contains('regions', $region));

        return $query->execute();
    }
}
