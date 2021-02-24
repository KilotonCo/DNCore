<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_multi_items_Interface;

class DNCore_API_multi_items_Class extends DNCore_Abstract implements DNCore_API_multi_items_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function itemIds(string $value): DNCore_API_multi_items_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}