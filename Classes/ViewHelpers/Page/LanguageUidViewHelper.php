<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Page;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use T3v\T3vCore\ViewHelpers\Traits\LocalizationTrait;
use TYPO3\CMS\Core\Context\Exception\AspectNotFoundException;

/**
 * The language UID view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers\Page
 */
class LanguageUidViewHelper extends AbstractViewHelper
{
    /**
     * Use the localization trait.
     */
    use LocalizationTrait;

    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('default', 'int', 'The default language UID, defaults to `0`', false, 0);
    }

    /**
     * The view helper render function.
     *
     * @return int The language UID of the current page if available, otherwise the default one
     * @throws AspectNotFoundException
     */
    public function render(): int
    {
        $languageUid = $this->getLanguageUid();

        return $languageUid ?: $this->arguments['default'];
    }
}
