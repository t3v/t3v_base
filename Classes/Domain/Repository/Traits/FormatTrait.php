<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository\Traits;

use T3v\T3vBase\Domain\Repository\FormatRepository;

/**
 * The format trait.
 *
 * @package T3v\T3vBase\Domain\Repository\Traits
 */
trait FormatTrait
{
    /**
     * The format repository.
     *
     * @var FormatRepository
     */
    protected $formatRepository;

    /**
     * Injects the format repository.
     *
     * @param FormatRepository $formatRepository The format repository
     */
    public function injectFormatRepository(FormatRepository $formatRepository): void
    {
        $this->$formatRepository = $formatRepository;
    }
}
