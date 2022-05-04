<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Repository\Traits;

use T3v\T3vBase\Domain\Repository\ThemeRepository;

/**
 * The theme trait.
 *
 * @package T3v\T3vBase\Domain\Repository\Traits
 */
trait ThemeTrait
{
    /**
     * The theme repository.
     *
     * @var ThemeRepository
     */
    protected $themeRepository;

    /**
     * Injects the theme repository.
     *
     * @param ThemeRepository $themeRepository The theme repository
     */
    public function injectThemeRepository(ThemeRepository $themeRepository): void
    {
        $this->themeRepository = $themeRepository;
    }
}
