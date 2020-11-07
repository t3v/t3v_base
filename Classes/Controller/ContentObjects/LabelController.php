<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;

/**
 * The label controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class LabelController extends ContentObjectController
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

        $settings['text'] = $data['header'];
        $settings['title'] = $data['subheader'] ?: $data['header'];
        $settings['alt'] = $data['subheader'] ?: $data['header'];
        $settings['link'] = $data['header_link'];

        return $settings;
    }
}
