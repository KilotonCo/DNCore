<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_auction_Interface;

class DNCore_API_auction_Class extends DNCore_Abstract implements DNCore_API_auction_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function limit(int $value): DNCore_API_auction_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function unitPrice(string $value): DNCore_API_auction_Interface
    {
        $this->Sort[__FUNCTION__] = $value;
        return $this;
    }

    public function reinforce(string $value): DNCore_API_auction_Interface
    {
        $this->Sort[__FUNCTION__] = $value;
        return $this;
    }

    public function auctionNo(string $value): DNCore_API_auction_Interface
    {
        $this->Sort[__FUNCTION__] = $value;
        return $this;
    }

    public function itemId(string $value): DNCore_API_auction_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function itemName(string $value): DNCore_API_auction_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordType(string $value): DNCore_API_auction_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordShort(bool $value): DNCore_API_auction_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function minLevel(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function maxLevel(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function rarity(string $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function reinforceTypeId(string $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function minReinforce(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function maxReinforce(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function minRefine(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function maxRefine(int $value): DNCore_API_auction_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }
}