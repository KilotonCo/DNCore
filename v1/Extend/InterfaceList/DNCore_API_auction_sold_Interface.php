<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_auction_sold_Interface extends DNCore_API_Interface {

    public function limit(int $value) : self;

    public function itemId(String $value) : self;

    public function itemName(String $value) : self;

    public function wordType(String $value) : self;

    public function wordShort(bool $value) : self;

}