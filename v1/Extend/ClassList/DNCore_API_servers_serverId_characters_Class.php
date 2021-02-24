<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_servers_serverId_characters_Interface;

class DNCore_API_servers_serverId_characters_Class extends DNCore_Abstract implements DNCore_API_servers_serverId_characters_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }


    public function zoom(int $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function serverId(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function characterName(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function jobId(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function jobGrowId(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function wordType(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function limit(string $value): DNCore_API_servers_serverId_characters_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}