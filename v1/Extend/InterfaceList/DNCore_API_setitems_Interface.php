<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_setitems_Interface extends DNCore_API_Interface {

    public function setItemName(String $value) : self; // urlEncode

    public function limit(int $value) : self; // 10 ~ 100

    public function wordType(String $value) : self; // match,front,full

}