<?php
declare(strict_types=1);

namespace T3v\T3vBase\Controller\ContentObjects;

use T3v\T3vCore\Controller\ContentObjectController;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The background controller class.
 *
 * @package T3v\T3vBase\Controller\ContentObjects
 */
class BackgroundController extends ContentObjectController
{
    /**
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $settings['name'] = $this->data['header'];
        $settings['title'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['alt'] = $this->data['subheader'] ?: $this->data['header'];
        $settings['link'] = $this->data['header_link'];

        if ($settings['backgroundImages']) {
            $settings['backgroundImages'] = GeneralUtility::intExplode(',', $settings['backgroundImages'], true);
        }

        $this->view->assign('settings', $settings);
    }
}
