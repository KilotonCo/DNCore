<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_multi_items_Interface extends DNCore_API_Interface {

    public function itemIds(String $value) : self; // "," explode

}