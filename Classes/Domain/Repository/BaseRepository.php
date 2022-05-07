<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository;

use T3v\T3vBase\Domain\Repository\Traits\LocalizationTrait;
use T3v\T3vCore\Domain\Repository\AbstractRepository;

/**
 * The base repository class.
 *
 * @package T3v\T3vBase\Domain\Repository
 */
class BaseRepository extends AbstractRepository
{
    /**
     * Use the localization trait.
     */
    use LocalizationTrait;
}
