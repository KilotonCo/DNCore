<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_items_Interface extends DNCore_API_Interface {

    public function limit(int $value) : self; // 10 ~ 30

    public function itemName(String $value) : self; // urlEncode

    public function wordType(String $value) : self; // match,front,full

    public function minLevel(int $value) : self;

    public function maxLevel(int $value) : self;

    public function rarity(String $value) : self; // urlEncode

}