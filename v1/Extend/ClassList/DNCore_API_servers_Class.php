<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_servers_Interface;

class DNCore_API_servers_Class extends DNCore_Abstract implements DNCore_API_servers_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

}