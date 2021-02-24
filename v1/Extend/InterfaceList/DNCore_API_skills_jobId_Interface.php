<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

use DNCore\Extend\DNCore_Abstract;

interface DNCore_API_skills_jobId_Interface extends DNCore_API_Interface {

    public function jobId(String $value) : self;

    public function jobGrowId(String $value) : self;

}