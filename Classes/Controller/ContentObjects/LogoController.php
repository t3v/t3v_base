<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;

/**
 * The logo controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class LogoController extends ContentObjectController
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

        $settings['name'] = $data['header'];
        $settings['title'] = $data['subheader'] ?: $data['header'];
        $settings['link'] = $settings['link'] ?: $data['header_link'];

        return $settings;
    }
}
