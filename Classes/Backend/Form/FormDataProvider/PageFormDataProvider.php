<?php
namespace T3v\T3vBase\Backend\Form\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;

/**
 * The page form data provider class.
 *
 * @package T3v\T3vBase\Backend\Form\FormDataProvider
 */
class PageFormDataProvider implements FormDataProviderInterface {
  /**
   * The table name of the form data provider.
   */
  const TABLE_NAME = 'pages';

  /**
   * Adds data to the form data.
   *
   * @param array $formData The form data
   * @return array The modified form data
   */
  public function addData(array $formData) {
    if ($formData['tableName'] !== $this::TABLE_NAME) {
      return $formData;
    }

    $formData = $this->addAuthorDetailsToFormData($formData);

    return $formData;
  }

  /**
   * Adds author details to the form data if not already available.
   *
   * @param array $formData The form data
   * @return array The modified form data
   */
  protected function addAuthorDetailsToFormData(array $formData) {
    if (empty($formData['databaseRow']['author'])) {
      $formData['databaseRow']['author'] = $GLOBALS['BE_USER']->user['realName'];
    }

    if (empty($formData['databaseRow']['author_email'])) {
      $formData['databaseRow']['author_email'] = $GLOBALS['BE_USER']->user['email'];
    }

    return $formData;
  }
}
