<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_servers_serverId_characters_characterId_Interface extends DNCore_API_Interface {

    public function zoom(int $value) : self; // 1 ~ 3

    public function serverId(String $value) : self;

    public function characterId(String $value) : self;

}