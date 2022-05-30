<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The background controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class BackgroundController extends ContentObjectController
{
    /**
     * The `index` action.
     */
    public function indexAction(): void
    {
        $this->view->assign('settings', $this->getSettingsForIndexAction());
    }

    /**
     * Gets the settings for the `index` action.
     *
     * @return array The settings
     */
    private function getSettingsForIndexAction(): array
    {
        $settings = $this->settings;
        $data = $this->data;

        $settings['name'] = $data['header'];
        $settings['title'] = $data['subheader'] ?: $data['header'];
        $settings['alt'] = $data['subheader'] ?: $data['header'];
        $settings['link'] = $data['header_link'];

        $fileRepository = GeneralUtility::makeInstance(FileRepository::class);
        $backgroundImages = $fileRepository->findByRelation('tt_content', 'background_images', $this->data['uid']);
        $settings['backgroundImages'] = $backgroundImages;

        return $settings;
    }
}
