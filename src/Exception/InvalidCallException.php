<?php

/**
 * This file is part of the guanguans/eii-foundation.
 * This file modified from https://github.com/yiisoft/yii2.
 * (c) guanguans <ityaozm@gmail.com>
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\EiiFoundation\Exception;

/**
 * InvalidCallException represents an exception caused by calling a method in a wrong way.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 */
class InvalidCallException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Call';
    }
}
