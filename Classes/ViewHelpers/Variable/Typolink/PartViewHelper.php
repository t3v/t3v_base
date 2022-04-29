<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Variable\Typolink;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Service\TypoLinkCodecService;

/**
 * The part view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers\Variable\Typolink
 */
class PartViewHelper extends AbstractViewHelper
{
    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('part', 'string', 'The parameter part to be extracted', true);
    }

    /**
     * The view helper render function.
     *
     * @return string The typolink part
     */
    public function render(): string
    {
        $part = $this->arguments['part'] ?? null;
        $typoLink = trim($this->renderChildren());
        $typoLink = str_replace('&quot;', '"', $typoLink);
        $typoLinkCodec = GeneralUtility::makeInstance(TypoLinkCodecService::class);

        return $typoLinkCodec->decode($typoLink)[$part] ?? '';
    }
}
