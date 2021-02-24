<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_auction_auctionNo_Interface extends DNCore_API_Interface {

    public function auctionNo(int $value) : self;

}