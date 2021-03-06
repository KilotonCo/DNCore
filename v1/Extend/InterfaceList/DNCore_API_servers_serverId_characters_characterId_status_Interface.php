<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_servers_serverId_characters_characterId_status_Interface extends DNCore_API_Interface {

    public function serverId(String $value) : self;

    public function characterId(String $value) : self;

}