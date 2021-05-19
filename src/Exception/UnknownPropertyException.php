<?php

/**
 * This file is part of the guanguans/eii-foundation.
 * This file modified from https://github.com/yiisoft/yii2.
 * (c) guanguans <ityaozm@gmail.com>
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\EiiFoundation\Exception;

/**
 * UnknownPropertyException represents an exception caused by accessing unknown object properties.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 */
class UnknownPropertyException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Property';
    }
}
