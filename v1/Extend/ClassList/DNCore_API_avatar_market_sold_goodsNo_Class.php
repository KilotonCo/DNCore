<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_avatar_market_sold_goodsNo_Interface;

class DNCore_API_avatar_market_sold_goodsNo_Class extends DNCore_Abstract implements DNCore_API_avatar_market_sold_goodsNo_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function goodsNo(int $value): DNCore_API_avatar_market_sold_goodsNo_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}