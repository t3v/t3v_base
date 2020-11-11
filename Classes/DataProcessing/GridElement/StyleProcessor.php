<?php
declare(strict_types=1);

namespace T3v\T3vBase\DataProcessing\GridElement;

use T3v\T3vBase\Domain\Repository\StyleRepository;
use T3v\T3vCore\DataProcessing\AbstractProcessor;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * The style processor class.
 *
 * @package T3v\T3vBase\DataProcessing\GridElement
 */
class StyleProcessor extends AbstractProcessor
{
    /**
     * The process function.
     *
     * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $contentObject The content object
     * @param array $contentObjectConfiguration The content object configuration
     * @param array $processorConfiguration The processor configuration
     * @param array $processedData The processed data
     * @return array The processed data
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @noinspection PhpFullyQualifiedNameUsageInspection
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

        $uids = [];

        if (!empty($processedData['data']['flexform_styles']) || !empty($processedData['data']['flexform_moreStyles'])) {
            $uids = array_merge(
                GeneralUtility::intExplode(',', $processedData['data']['flexform_styles'], true),
                GeneralUtility::intExplode(',', $processedData['data']['flexform_moreStyles'], true)
            );
        }

        if (empty($uids)) {
            return $processedData;
        }

        $styleRepository = self::getObjectManager()->get(StyleRepository::class);
        $styles = $styleRepository->findByUids($uids);

        if (empty($styles)) {
            return $processedData;
        }

        $as = 'styles';

        if ($processorConfiguration['default.'] && $processorConfiguration['default.']['as']) {
            $as = $processorConfiguration['default.']['as'];
        }

        $processedData['data'][$as] = $styles;

        return $processedData;
    }
}
