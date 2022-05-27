<?php
namespace T3v\T3vBase\ViewHelpers\Render;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use T3v\T3vCore\ViewHelpers\Traits\LocalizationTrait;
use T3v\T3vCore\ViewHelpers\Traits\SettingsTrait;
use TYPO3\CMS\Core\Context\Exception\AspectNotFoundException;

/**
 * The view column view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers\Render
 */
class ViewColumnViewHelper extends AbstractViewHelper
{
    /**
     * Use the localization trait.
     */
    use LocalizationTrait;

    /**
     * Use the settings trait.
     */
    use SettingsTrait;

    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('viewColumn', 'int', 'The UID of the view column', true);
        $this->registerArgument('data', 'array', 'The data', true);
        $this->registerArgument('mode', 'array', 'The mode', false, 'strict');
    }

    /**
     * The view helper render function.
     *
     * @return string The rendered grid element view children
     * @throws AspectNotFoundException
     */
    public function render(): string
    {
        $output = '';
        $viewColumn = $this->arguments['viewColumn'];
        $data = $this->arguments['data'];
        $mode = $this->arguments['mode'];
        $viewChildren = $data['tx_gridelements_view_children'];
        $viewChildren = $this->filterViewChildrenByViewColumn($viewChildren, $viewColumn);

        if ($mode === 'strict' && $this->settingsService->runningInStrictMode()) {
            $viewChildren = $this->filterViewChildrenBySysLanguage($viewChildren);
        }

        foreach ($viewChildren as $viewChild) {
            $uid = $viewChild['uid'];
            $viewChildId = "tx_gridelements_view_child_$uid";
            $viewChildContent = $data[$viewChildId];

            if (!empty($viewChildContent)) {
                $output .= $viewChildContent;
            }
        }

        return $output;
    }

    /**
     * Filters the view children by a view column.
     *
     * @param array $viewChildren The view children
     * @param int $viewColumn The UID of the view column
     * @return array The filtered view children
     */
    protected function filterViewChildrenByViewColumn(array $viewChildren, int $viewColumn): array
    {
        $result = [];

        if (!empty($viewChildren)) {
            foreach ($viewChildren as $viewChild) {
                if ((int)$viewChild['tx_gridelements_columns'] === $viewColumn) {
                    $result[] = $viewChild;
                }
            }
        }

        return $result;
    }

    /**
     * Filters the view children by the current system language.
     *
     * @param array $viewChildren The view children
     * @return array The filtered view children
     * @throws AspectNotFoundException
     */
    protected function filterViewChildrenBySysLanguage(array $viewChildren): array
    {
        $result = [];

        if (!empty($viewChildren)) {
            $sysLanguageUid = $this->getSysLanguageUid();

            foreach ($viewChildren as $viewChild) {
                if ((int)$viewChild['sys_language_uid'] === $sysLanguageUid) {
                    $result[] = $viewChild;
                }
            }
        }

        return $result;
    }
}
