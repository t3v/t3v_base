<?php
declare(strict_types=1);

namespace T3v\T3vBase\ViewHelpers\Format;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use T3v\T3vCore\ViewHelpers\Traits\LocalizationTrait;
use TYPO3\CMS\Core\Context\Exception\AspectNotFoundException;

/**
 * The file size view helper class.
 *
 * @package T3v\T3vBase\ViewHelpers\Format
 */
class FileSizeViewHelper extends AbstractViewHelper
{
    /**
     * The size suffixes.
     */
    public const SUFFIXES = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

    /**
     * Use the localization trait.
     */
    use LocalizationTrait;

    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument(
            'fileSize',
            'int',
            'The file size in bytes',
            true
        );
        $this->registerArgument(
            'base',
            'int',
            'The optional base unit to calculate the file size, defaults to `1000`',
            false,
            1000
        );
        $this->registerArgument(
            'precision',
            'int',
            ' The optional precision, defaults to `2`',
            false,
            2
        );
        $this->registerArgument(
            'decimalSeparator',
            'int',
            'The optional decimal separator, defaults to `null`'
        );
        $this->registerArgument(
            'thousandsSeparator',
            'int',
            'The optional thousands separator, defaults to `null`'
        );
    }

    /**
     * The view helper render function.
     *
     * @return string The formatted or human-readable file size
     * @throws AspectNotFoundException
     */
    public function render(): string
    {
        $fileSize = $this->arguments['fileSize'];
        $base = $this->arguments['base'];
        $precision = $this->arguments['precision'];
        $decimalSeparator = $this->arguments['decimalSeparator'];
        $thousandsSeparator = $this->arguments['thousandsSeparator'];

        $decimalSeparator = $decimalSeparator ?: $this->getDecimalSeparator();
        $thousandsSeparator = $thousandsSeparator ?: $this->getThousandsSeparator();

        $pow = floor(($fileSize ? log($fileSize) : 0) / log($base));
        $pow = min($pow, count(self::SUFFIXES) - 1);
        $fileSize /= (1 << (10 * $pow));

        return sprintf(
            '%s %s',
            number_format(round($fileSize, 4 * $precision), $precision, $decimalSeparator, $thousandsSeparator),
            self::SUFFIXES[$pow]
        );
    }

    /**
     * Gets the decimal separator based on the current language.
     *
     * @return string The decimal separator
     * @throws AspectNotFoundException
     */
    protected function getDecimalSeparator(): string
    {
        switch ($this->getLanguage()) {
            case 'ch':
            case 'de':
                return ',';
            default:
                return '.';
        }
    }

    /**
     * Gets the thousands separator based on the current language.
     *
     * @return string The thousands separator
     * @throws AspectNotFoundException
     */
    protected function getThousandsSeparator(): string
    {
        switch ($this->getLanguage()) {
            case 'ch':
            case 'de':
                return '.';
            default:
                return ',';
        }
    }
}
