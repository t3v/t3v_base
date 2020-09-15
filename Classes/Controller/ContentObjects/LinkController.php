<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;

/**
 * The link controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class LinkController extends ContentObjectController
{
    /**
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $settings['name'] = $this->data['header'];
        $settings['title'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['link'] = $settings['link'] ?: $this->data['header_link'];

        $this->view->assign('settings', $settings);
    }
}
