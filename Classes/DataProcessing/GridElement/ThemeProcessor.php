<?php
declare(strict_types=1);

namespace T3v\T3vBase\DataProcessing\GridElement;

use T3v\T3vBase\Domain\Repository\ThemeRepository;
use T3v\T3vCore\DataProcessing\AbstractProcessor;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * The theme processor class.
 *
 * @package T3v\T3vBase\DataProcessing\GridElement
 */
class ThemeProcessor extends AbstractProcessor
{
    /**
     * The process function.
     *
     * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $contentObject The content object
     * @param array $contentObjectConfiguration The content object configuration
     * @param array $processorConfiguration The processor configuration
     * @param array $processedData The processed data
     * @return array The processed data
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function process(
        ContentObjectRenderer $contentObject,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        if (empty($processorConfiguration) || $processedData['data']['CType'] !== 'gridelements_pi1') {
            return $processedData;
        }

        $uid = null;

        if (!empty($processedData['data']['flexform_theme']) && is_numeric($processedData['data']['flexform_theme'])) {
            $uid = (int)$processedData['data']['flexform_theme'];
        }

        if ($uid === null) {
            return $processedData;
        }

        $themeRepository = self::getObjectManager()->get(ThemeRepository::class);
        $theme = $themeRepository->findByUid($uid);

        if ($theme === null) {
            return $processedData;
        }

        $as = 'theme';

        if ($processorConfiguration['default.'] && $processorConfiguration['default.']['as']) {
            $as = $processorConfiguration['default.']['as'];
        }

        $processedData['data'][$as] = $theme;

        return $processedData;
    }
}
