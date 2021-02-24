<?php

declare(strict_types=1);

namespace DNCore\Extend\InterfaceList;

interface DNCore_API_avatar_market_sold_Interface extends DNCore_API_Interface {

    public function limit(int $value) : self; // 10 ~ 50

    public function price(String $value) : self; // sort=asc,desc

    public function goodsNo(String $value) : self; // sort=asc,desc

    public function hashtag(String $value) : self; // "," 구분자,urlEncode

    public function title(String $value) : self; // urlEncode

    public function wordType(String $value) : self; // match,front,full

    public function jobId(String $value) : self; // q=

    public function emblemCode(int $value) : self; // q=

    public function avatarSet(String $value) : self; // q=true,false

    public function avatarRarity(String $value) : self; // urlEncode

    public function minPrice(int $value) : self;

    public function maxPrice(int $value) : self;

    public function minAvatarCount(int $value) : self;

    public function maxAvatarCount(int $value) : self;

}