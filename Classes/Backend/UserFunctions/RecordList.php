<?php
declare(strict_types=1);

namespace T3v\T3vBase\Backend\UserFunctions;

use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * The record list class.
 *
 * @package T3v\T3vBase\Backend\UserFunctions
 */
class RecordList
{
    /**
     * Processes the label.
     *
     * @param array $parameters The parameters
     */
    public function processLabel(&$parameters): void
    {
        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);

        if (!empty($record)) {
            $newTitle = $record['header'];

            if (!empty($record['label']) && $record['label'] !== $newTitle) {
                $newTitle = '[' . $record['label'] . '] ' . substr($newTitle, 0, 30);
            }

            $parameters['title'] = $newTitle;
        }
    }
}
