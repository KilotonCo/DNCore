<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_avatar_market_sale_Interface;

class DNCore_API_avatar_market_sale_Class extends DNCore_Abstract implements DNCore_API_avatar_market_sale_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function limit(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function price(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Sort[__FUNCTION__] = $value;
        return $this;
    }

    public function goodsNo(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Sort[__FUNCTION__] = $value;
        return $this;
    }

    public function hashtag(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function title(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordType(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function jobId(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function emblemCode(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function avatarSet(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function avatarRarity(string $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function minPrice(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function maxPrice(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function minAvatarCount(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }

    public function maxAvatarCount(int $value): DNCore_API_avatar_market_sale_Interface
    {
        $this->Query[__FUNCTION__] = $value;
        return $this;
    }
}