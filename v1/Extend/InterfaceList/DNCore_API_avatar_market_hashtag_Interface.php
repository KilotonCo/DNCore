<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_avatar_market_hashtag_Interface extends DNCore_API_Interface {

    public function hashtagType(String $value) : self; //  category,mood

}