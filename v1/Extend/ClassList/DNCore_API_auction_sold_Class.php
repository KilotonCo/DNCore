<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_auction_sold_Interface;

class DNCore_API_auction_sold_Class extends DNCore_Abstract implements DNCore_API_auction_sold_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function limit(int $value): DNCore_API_auction_sold_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function itemId(string $value): DNCore_API_auction_sold_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function itemName(string $value): DNCore_API_auction_sold_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordType(string $value): DNCore_API_auction_sold_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordShort(bool $value): DNCore_API_auction_sold_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}