<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The copyright controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class CopyrightController extends ContentObjectController
{
    /**
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $settings['text'] = $this->data['header'];
        $settings['title'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['link'] = $this->data['header_link'];

        if ($settings['format']) {
            $settings['text'] = strftime($settings['text']);
            $settings['title'] = strftime($settings['title']);
        }

        $this->view->assign('settings', $settings);
    }
}
