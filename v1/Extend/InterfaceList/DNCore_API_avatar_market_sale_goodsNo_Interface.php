<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_avatar_market_sale_goodsNo_Interface extends DNCore_API_Interface {

    public function goodsNo(int $value) : self;

}