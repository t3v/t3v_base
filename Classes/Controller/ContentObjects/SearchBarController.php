<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;

/**
 * The search bar controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class SearchBarController extends ContentObjectController
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
    private function getSettingsForIndexAction(): array {
        $settings = $this->settings;
        $data = $this->data;

        $settings['legend'] = $data['header'];
        $settings['label'] = $data['subheader'] ?: $data['header'];

        return $settings;
    }
}
