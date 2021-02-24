<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_skills_jobId_skillId_Interface extends DNCore_API_Interface {

    public function jobId(String $value) : self;

    public function skillId(String $value) : self;

}