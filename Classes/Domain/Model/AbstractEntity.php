<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vCore\Domain\Model\AbstractEntity as T3vCoreAbstractEntity;

/**
 * The abstract entity class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
abstract class AbstractEntity extends T3vCoreAbstractEntity {
  /**
   * The extension key.
   */
  public const EXTENSION_KEY = 't3v_base';
}
