<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_setitems_Interface;

class DNCore_API_setitems_Class extends DNCore_Abstract implements DNCore_API_setitems_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function setItemName(string $value): DNCore_API_setitems_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function limit(int $value): DNCore_API_setitems_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordType(string $value): DNCore_API_setitems_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}