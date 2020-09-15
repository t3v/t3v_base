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
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $settings['text'] = $this->data['header'];
        $settings['title'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['alt'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['link'] = $this->data['header_link'];

        $this->view->assign('settings', $settings);
    }
}
