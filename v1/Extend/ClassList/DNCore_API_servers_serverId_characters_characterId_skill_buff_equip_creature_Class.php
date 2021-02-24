<?php

declare(strict_types=1);

namespace DNCore\Extend\ClassList;

use DNCore\Extend\DNCore_Abstract;
use DNCore\Extend\InterfaceList\DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Interface;

class DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Class extends DNCore_Abstract implements DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Interface {

    function init(): DNCore_Abstract { $this->exUrl(__CLASS__); return $this; }

    public function serverId(string $value): DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }

    public function characterId(string $value): DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Interface
    {
        $this->Data[__FUNCTION__] = $value;
        return $this;
    }
}