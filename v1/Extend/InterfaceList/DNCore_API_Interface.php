<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

use DNCore\Extend\DNCore_Abstract;

interface DNCore_API_Interface {

    public function dataCheck() : DNCore_Abstract;

    public function run() : DNCore_Abstract;

}