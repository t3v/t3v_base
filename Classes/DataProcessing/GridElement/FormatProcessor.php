<?php
declare(strict_types=1);

namespace T3v\T3vBase\DataProcessing\GridElement;

use T3v\T3vBase\Domain\Repository\FormatRepository;
use T3v\T3vCore\DataProcessing\AbstractProcessor;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * The format processor class.
 *
 * @package T3v\T3vBase\DataProcessing\GridElement
 */
class FormatProcessor extends AbstractProcessor
{
    /**
     * The process function.
     *
     * @param ContentObjectRenderer $contentObject The content object
     * @param array $contentObjectConfiguration The content object configuration
     * @param array $processorConfiguration The processor configuration
     * @param array $processedData The processed data
     * @return array The processed data
     * @throws InvalidQueryException
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

        if (!empty($processedData['data']['flexform_formats'])) {
            $uids = GeneralUtility::intExplode(',', $processedData['data']['flexform_formats'], true);
        }

        if (empty($uids)) {
            return $processedData;
        }

        $formatRepository = self::getObjectManager()->get(FormatRepository::class);
        $formats = $formatRepository->findByUids($uids);
        $as = 'formats';

        if ($processorConfiguration['default.'] && $processorConfiguration['default.']['as']) {
            $as = $processorConfiguration['default.']['as'];
        }

        $processedData['data'][$as] = $formats;

        return $processedData;
    }
}
