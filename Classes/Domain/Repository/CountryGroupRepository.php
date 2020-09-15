<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Model\Country;
use T3v\T3vCore\Domain\Repository\AbstractRepository;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

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
     * Returns all country groups by the matching country.
     *
     * @param \T3v\T3vBase\Domain\Model\Country $country The country
     * @param bool $respectSysLanguage Respect the system language, defaults to `false`
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface The found country groups
     * @throws InvalidQueryException
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function findByCountry(Country $country, bool $respectSysLanguage = false): QueryResultInterface
    {
        $query = $this->createQuery();
        $settings = $query->getQuerySettings();
        $settings->setRespectSysLanguage($respectSysLanguage);

        try {
            $query->matching($query->contains('countries', $country));
        } catch (InvalidQueryException $exception) {
            error_log($exception->getMessage());
        }

        return $query->execute();
    }
}
