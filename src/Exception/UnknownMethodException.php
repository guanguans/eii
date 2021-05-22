<?php

/**
 * This file is part of the guanguans/eii.
 * This file is modified from https://github.com/yiisoft/yii2
 * (c) guanguans <ityaozm@gmail.com>
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Eii\Exception;

/**
 * UnknownMethodException represents an exception caused by accessing an unknown object method.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 */
class UnknownMethodException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Method';
    }
}
