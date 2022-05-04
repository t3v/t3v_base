<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository\Traits;

use T3v\T3vBase\Domain\Repository\StyleRepository;

/**
 * The style trait.
 *
 * @package T3v\T3vBase\Domain\Repository\Traits
 */
trait StyleTrait
{
    /**
     * The style repository.
     *
     * @var StyleRepository
     */
    protected $styleRepository;

    /**
     * Injects the style repository.
     *
     * @param StyleRepository $styleRepository The style repository
     */
    public function injectStyleRepository(StyleRepository $styleRepository): void
    {
        $this->styleRepository = $styleRepository;
    }
}
