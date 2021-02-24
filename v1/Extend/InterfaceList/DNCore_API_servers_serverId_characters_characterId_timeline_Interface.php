<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_servers_serverId_characters_characterId_timeline_Interface extends DNCore_API_Interface {

    public function serverId(String $value) : self;

    public function characterId(String $value) : self;

    public function startDate(String $value) : self; // now - 30day

    public function endDate(String $value) : self; // now

    public function limit(int $value) : self; // 10 ~ 100

    public function code(String $value) : self;

    public function next(String $value) : self;

}