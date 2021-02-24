<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_servers_serverId_characters_characterId_timeline_Interface;

class DNCore_API_servers_serverId_characters_characterId_timeline_Class extends DNCore_Abstract implements DNCore_API_servers_serverId_characters_characterId_timeline_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function serverId(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function characterId(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function startDate(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function endDate(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function limit(int $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function code(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function next(string $value): DNCore_API_servers_serverId_characters_characterId_timeline_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}