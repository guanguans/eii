<?php

namespace Guanguans\EiiFoundation\Examples\Components;

use Guanguans\EiiFoundation\Component;

class Pay extends Component
{
    /**
     * @var string
     */
    private $wechat;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function getWechat()
    {
        return $this->wechat;
    }

    /**
     * @param $wechat
     */
    public function setWechat($wechat)
    {
        $this->wechat = $wechat;
    }
}
