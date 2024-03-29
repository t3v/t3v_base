<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers;

use Closure;
use T3v\T3vCore\Service\LocalizationService;
use T3v\T3vCore\Service\PageService;
use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use TYPO3\CMS\Core\Context\Exception\AspectNotFoundException;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * The page view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers
 */
class PageViewHelper extends AbstractViewHelper
{
    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('uid', 'int', 'The UID of the page', true);
        $this->registerArgument('languageUid', 'int', 'The optional language UID');
    }

    /**
     * The view helper render static function.
     *
     * @param array $arguments The arguments
     * @param Closure $renderChildrenClosure The render children closure
     * @param RenderingContextInterface $renderingContext The rendering context
     * @return array The page object
     * @throws AspectNotFoundException
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): array {
        $uid = (int)$arguments['uid'];
        $languageUid = isset($arguments['languageUid']) ? (int)$arguments['languageUid'] : self::getLocalizationService()->getLanguageUid();

        return self::getPageService()->getPageByUid($uid, $languageUid);
    }

    /**
     * Gets the localization service.
     *
     * @return LocalizationService The localization service
     */
    protected static function getLocalizationService(): LocalizationService
    {
        return GeneralUtility::makeInstance(LocalizationService::class);
    }

    /**
     * Gets the page service.
     *
     * @return PageService The page service
     */
    protected static function getPageService(): PageService
    {
        return GeneralUtility::makeInstance(PageService::class);
    }
}
