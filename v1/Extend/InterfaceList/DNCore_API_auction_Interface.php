<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_auction_Interface extends DNCore_API_Interface {

    public function limit(int $value) : self;

    public function unitPrice(String $value) : self;

    public function reinforce(String $value) : self;

    public function auctionNo(String $value) : self;

    public function itemId(String $value) : self;

    public function itemName(String $value) : self;

    public function wordType(String $value) : self;

    public function wordShort(bool $value) : self;

    public function minLevel(int $value) : self;

    public function maxLevel(int $value) : self;

    public function rarity(String $value) : self;

    public function reinforceTypeId(String $value) : self;

    public function minReinforce(int $value) : self;

    public function maxReinforce(int $value) : self;

    public function minRefine(int $value) : self;

    public function maxRefine(int $value) : self;

}