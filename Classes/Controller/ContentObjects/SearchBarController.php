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
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $settings['legend'] = $this->data['header'];
        $settings['label'] = $this->data['subheader'] ?: $this->data['header'];

        $this->view->assign('settings', $settings);
    }
}
