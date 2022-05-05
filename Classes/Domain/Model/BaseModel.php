<?php
declare(strict_types=1);

namespace T3v\T3vBase\Domain\Model;

use T3v\T3vCore\Domain\Model\AbstractEntity;

/**
 * The base model class.
 *
 * @package T3v\T3vBase\Domain\Model
 */
class BaseModel extends AbstractEntity
{
    /**
     * The extension key.
     */
    public const EXTENSION_KEY = 't3v_base';
}
