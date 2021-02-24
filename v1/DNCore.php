<?php

declare(strict_types=1);

namespace DNCore;

use DNCore\Extend\ClassList\DNCore_API_auction_auctionNo_Class;
use DNCore\Extend\ClassList\DNCore_API_auction_Class;
use DNCore\Extend\ClassList\DNCore_API_auction_sold_Class;
use DNCore\Extend\ClassList\DNCore_API_avatar_market_hashtag_Class;
use DNCore\Extend\ClassList\DNCore_API_avatar_market_sale_Class;
use DNCore\Extend\ClassList\DNCore_API_avatar_market_sale_goodsNo_Class;
use DNCore\Extend\ClassList\DNCore_API_avatar_market_sold_Class;
use DNCore\Extend\ClassList\DNCore_API_avatar_market_sold_goodsNo_Class;
use DNCore\Extend\ClassList\DNCore_API_custom_equipment_setitems_Class;
use DNCore\Extend\ClassList\DNCore_API_items_Class;
use DNCore\Extend\ClassList\DNCore_API_items_itemId_Class;
use DNCore\Extend\ClassList\DNCore_API_items_itemId_shop_Class;
use DNCore\Extend\ClassList\DNCore_API_jobs_Class;
use DNCore\Extend\ClassList\DNCore_API_multi_items_Class;
use DNCore\Extend\ClassList\DNCore_API_multi_setitems_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_equip_avatar_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_equip_creature_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_equip_equipment_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_equip_flag_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_equip_talisman_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_avatar_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_equipment_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_skill_style_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_status_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_characterId_timeline_Class;
use DNCore\Extend\ClassList\DNCore_API_servers_serverId_characters_Class;
use DNCore\Extend\ClassList\DNCore_API_setitems_Class;
use DNCore\Extend\ClassList\DNCore_API_setitems_setItemId_Class;
use DNCore\Extend\ClassList\DNCore_API_skills_jobId_Class;
use DNCore\Extend\ClassList\DNCore_API_skills_jobId_skillId_Class;

class DNCore{

    private $apiKey = "";

    public function __construct(String $apiKey){
        return $this->init($apiKey);
    }

    private function init(String $apiKey) : self{
        $this->apiKey = $apiKey;
        return $this;
    }

    // 01. 서버 정보 [완료]
    public function servers() : DNCore_API_servers_Class{
        return new DNCore_API_servers_Class($this->apiKey);
    }

    // 02. 캐릭터 검색 [완료]
    public function characters() : DNCore_API_servers_serverId_characters_Class{
        return new DNCore_API_servers_serverId_characters_Class($this->apiKey);
    }

    // 03. 캐릭터 '기본정보' 검색 [완료]
    public function characters_detail() : DNCore_API_servers_serverId_characters_characterId_Class{
        return new DNCore_API_servers_serverId_characters_characterId_Class($this->apiKey);
    }

    // 04. 캐릭터 '타임라인 정보' 검색 [완료]
    public function characters_timeline() : DNCore_API_servers_serverId_characters_characterId_timeline_Class{
        return new DNCore_API_servers_serverId_characters_characterId_timeline_Class($this->apiKey);
    }

    // 05. 캐릭터 '능력치 정보' 검색 [완료]
    public function characters_status() : DNCore_API_servers_serverId_characters_characterId_status_Class{
        return new DNCore_API_servers_serverId_characters_characterId_status_Class($this->apiKey);
    }

    // 06. 캐릭터 '장착 장비' 검색 [완료]
    public function characters_equip() : DNCore_API_servers_serverId_characters_characterId_equip_equipment_Class{
        return new DNCore_API_servers_serverId_characters_characterId_equip_equipment_Class($this->apiKey);
    }

    // 07. 캐릭터 '장착 아바타' 검색 [완료]
    public function characters_avatar() : DNCore_API_servers_serverId_characters_characterId_equip_avatar_Class{
        return new DNCore_API_servers_serverId_characters_characterId_equip_avatar_Class($this->apiKey);
    }

    // 08. 캐릭터 '장착 크리쳐' 검색 [완료]
    public function characters_creature() : DNCore_API_servers_serverId_characters_characterId_equip_creature_Class{
        return new DNCore_API_servers_serverId_characters_characterId_equip_creature_Class($this->apiKey);
    }

    // 09. 캐릭터 '장착 휘장' 검색 [완료]
    public function characters_flag() : DNCore_API_servers_serverId_characters_characterId_equip_flag_Class{
        return new DNCore_API_servers_serverId_characters_characterId_equip_flag_Class($this->apiKey);
    }

    // 10. 캐릭터 '장착 탈리스만' 검색 [완료]
    public function characters_talisman() : DNCore_API_servers_serverId_characters_characterId_equip_talisman_Class{
        return new DNCore_API_servers_serverId_characters_characterId_equip_talisman_Class($this->apiKey);
    }

    // 11. 캐릭터 '스킬 스타일' 검색 [완료]
    public function characters_skill_style() : DNCore_API_servers_serverId_characters_characterId_skill_style_Class{
        return new DNCore_API_servers_serverId_characters_characterId_skill_style_Class($this->apiKey);
    }

    // 12. 캐릭터 '버프 스킬 강화 장착 장비' 검색 [완료]
    public function characters_skill_buff() : DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_equipment_Class{
        return new DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_equipment_Class($this->apiKey);
    }

    // 13. 캐릭터 '버프 스킬 강화 장착 아바타' 검색 [완료]
    public function characters_skill_avatar() : DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_avatar_Class{
        return new DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_avatar_Class($this->apiKey);
    }

    // 14. 캐릭터 '버프 스킬 강화 장착 크리쳐' 검색 [완료]
    public function characters_skill_creature() : DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Class{
        return new DNCore_API_servers_serverId_characters_characterId_skill_buff_equip_creature_Class($this->apiKey);
    }

    // 15. 경매장 등록 아이템 검색 [완료]
    public function aution() : DNCore_API_auction_Class{
        return new DNCore_API_auction_Class($this->apiKey);
    }

    // 16. 경매장 등록 아이템 조회 [완료]
    public function auctionNo() : DNCore_API_auction_auctionNo_Class{
        return new DNCore_API_auction_auctionNo_Class($this->apiKey);
    }

    // 17. 경매장 시세 검색 [완료]
    public function auction_sold() : DNCore_API_auction_sold_Class{
        return new DNCore_API_auction_sold_Class($this->apiKey);
    }

    // 18. 아바타 마켓 상품 검색 [완료]
    public function ttx1() : DNCore_API_avatar_market_sale_Class{
        return new DNCore_API_avatar_market_sale_Class($this->apiKey);
    }

    // 19. 아바타 마켓 상품 조회 [완료]
    public function ttx2() : DNCore_API_avatar_market_sale_goodsNo_Class{
        return new DNCore_API_avatar_market_sale_goodsNo_Class($this->apiKey);
    }

    // 20. 아바타 마켓 상품 시세 검색 [완료]
    public function ttx3() : DNCore_API_avatar_market_sold_Class{
        return new DNCore_API_avatar_market_sold_Class($this->apiKey);
    }

    // 21. 아바타 마켓 상품 시세 조회 [완료]
    public function ttx34() : DNCore_API_avatar_market_sold_goodsNo_Class{
        return new DNCore_API_avatar_market_sold_goodsNo_Class($this->apiKey);
    }

    // 22. 아바타 마켓 해시태그 조회 [완료]
    public function ttx45() : DNCore_API_avatar_market_hashtag_Class{
        return new DNCore_API_avatar_market_hashtag_Class($this->apiKey);
    }

    // 23. 아이템 검색 [완료]
    public function item() : DNCore_API_items_Class{
        return new DNCore_API_items_Class($this->apiKey);
    }

    // 24. 아이템 상세 정보 조회 [완료]
    public function item_detail() : DNCore_API_items_itemId_Class{
        return new DNCore_API_items_itemId_Class($this->apiKey);
    }

    // 25. 아이템 상점 판매 정보 조회 [완료]
    public function item_shop() : DNCore_API_items_itemId_shop_Class{
        return new DNCore_API_items_itemId_shop_Class($this->apiKey);
    }

    // 26. 다중 아이템 상세 정보 조회 [완료]
    public function item_multi() : DNCore_API_multi_items_Class{
        return new DNCore_API_multi_items_Class($this->apiKey);
    }

    // 27. 세트 아이템 검색 [완료]
    public function item_set() : DNCore_API_setitems_Class{
        return new DNCore_API_setitems_Class($this->apiKey);
    }

    // 28. 세트 아이템 상세 정보 조회 [완료]
    public function item_set_detail() : DNCore_API_setitems_setItemId_Class{
        return new DNCore_API_setitems_setItemId_Class($this->apiKey);
    }

    // 29. 다중 세트 아이템 상세 정보 조회 [완료]
    public function item_multi_set_detail() : DNCore_API_multi_setitems_Class{
        return new DNCore_API_multi_setitems_Class($this->apiKey);
    }

    // 30. 장비 조합 세트 아이템 활성화 정보 조회 [완료]
    public function item_multi_set_equip_detail() : DNCore_API_custom_equipment_setitems_Class{
        return new DNCore_API_custom_equipment_setitems_Class($this->apiKey);
    }

    // 31. 직업정보 [완료]
    public function jobs() : DNCore_API_jobs_Class{
        return new DNCore_API_jobs_Class($this->apiKey);
    }

    // 32. 직업별 스킬 리스트 [완료]
    public function job_skill() : DNCore_API_skills_jobId_Class{
        return new DNCore_API_skills_jobId_Class($this->apiKey);
    }

    // 33. 직업별 스킬 상세 정보 조회 [완료]
    public function job_skill_detail() : DNCore_API_skills_jobId_skillId_Class{
        return new DNCore_API_skills_jobId_skillId_Class($this->apiKey);
    }
}