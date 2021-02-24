## DNCore
던전앤파이터 온라인 API for PHP Library<br>
<b>네오플 던전앤파이터 API 를 사용합니다.</b>


| 이름 | 던전앤파이터 온라인 API |
| :-----------: | -------------------: |
| 버전 | 1.0.1 |
| 업데이트 | 2021.02.24 |

API 정보 : [네오플 던전앤파이터 API Docs](https://developers.neople.co.kr/contents/apiDocs "네오플 던전앤파이터 API Docs")

## 필수사양
| PHP | 7.2 이상 |
| :-----------: | -------------------: |
| Composer | 필수 |

## 라이센스 및 제작자
| License | MIT |
| :-----------: | -------------------: |
| 제작자 | KilotonCo / [Github](https://github.com/KilotonCo "KilotonCo Github") |

## 설치
```
composer require kilotonco/dncore
```

## 사용법
네오플에서 <b>ApiKey</b>를 발급받아서 입력. 
```
$dncore = new DNCore("apikey");
```

형식 : DNCore API 명령 -> 전달할 파라미터(값) -> 전달할 파라미터(값) ...<br>
파라미터를 작성이 끝나면 <b>datacheck()</b>를 사용해 API 사이트에서 전달하여 나온 Data 를 <b>getJsonData()</b>로 json으로 리턴.
<br><br>
<b><!> 파라미터는 필수가 아니면 없어도 상관없음.</b>

#### 예) 23번 아이템 검색 ( 황금 )
| API 명령 | 파라미터 | API 실행 | Data 받기 |
| :-----------: | ------------------- | ------------------- | ------------------- |
| item() | | |
|  | limit() | |
|  | itemName() | |
|  | wordType() | |
|  | minLevel() | |
|  | maxLevel() | |
|  | rarity() | |
|  |  |  datacheck() | | 
|  |  |  | getJsonData()<br> 또는<br> getData() |

#### Data 받기 
| 명령 | 리턴 타입 |
| :-----------: | -------------------: |
| getJsonData() | Json |
| getData() | array |


#### PHP Source
``` 
item()->itemName(urlencode("황금"))->wordType("full")->limit(10)->dataCheck()->getJsonData();
```
#### PHP Source 사용 시
```
$dncore = new DNCore("apikey");
echo $dncore->item()

    ->itemName(urlencode("황금"))
    ->wordType("full")
    ->limit(10)
    
    ->dataCheck()
    ->getJsonData();
```

#### 결과값 사용법
['Result'] 에 결과값이 저장되어 있습니다.
```
$dncore = new DNCore("apikey");
$data= $dncore->item()

    ->itemName(urlencode("황금"))
    ->wordType("full")
    ->limit(10)
    
    ->dataCheck()
    ->getData();

foreach($data['Result'] as $item => $value){
    echo $item.":".$value."<br>;
} 
```


## DNCore API 명령

#### 01. 서버 정보 
>servers()

#### 02. 캐릭터 검색
>characters()

#### 03. 캐릭터 '기본정보' 검색
>characters_detail()

#### 04. 캐릭터 '타임라인 정보' 검색
>characters_timeline()

#### 05. 캐릭터 '능력치 정보' 검색
>characters_status()

#### 06. 캐릭터 '장착 장비' 검색
>characters_equip()

#### 07. 캐릭터 '장착 아바타' 검색
>characters_avatar()

#### 08. 캐릭터 '장착 크리쳐' 검색
>characters_creature()

#### 09. 캐릭터 '장착 휘장' 검색
>characters_flag()

#### 10. 캐릭터 '장착 탈리스만' 검색
>characters_talisman()

#### 11. 캐릭터 '스킬 스타일' 검색
>characters_skill_style()

#### 12. 캐릭터 '버프 스킬 강화 장착 장비' 검색
>characters_skill_buff()

#### 13. 캐릭터 '버프 스킬 강화 장착 아바타' 검색
>characters_skill_avatar()

#### 14. 캐릭터 '버프 스킬 강화 장착 크리쳐' 검색
>characters_skill_creature()

#### 15. 경매장 등록 아이템 검색
>aution()

#### 16. 경매장 등록 아이템 조회
>auctionNo()

#### 17. 경매장 시세 검색
>auction_sold()

#### 18. 아바타 마켓 상품 검색
>avatar_market_sale()

#### 19. 아바타 마켓 상품 조회
>avatar_market_sale_goodsNo()

#### 20. 아바타 마켓 상품 시세 검색
>avatar_market_sold()

#### 21. 아바타 마켓 상품 시세 조회
>avatar_market_sold_goodsNo()

#### 22. 아바타 마켓 해시태그 조회
>avatar_market_hashtag()

#### 23. 아이템 검색
>item()

#### 24. 아이템 상세 정보 조회
>item_detail()

#### 25. 아이템 상점 판매 정보 조회
>item_shop()

#### 26. 다중 아이템 상세 정보 조회
>item_multi()

#### 27. 세트 아이템 검색
>item_set()

#### 28. 세트 아이템 상세 정보 조회
>item_set_detail()

#### 29. 다중 세트 아이템 상세 정보 조회
>item_multi_set_detail()

#### 30. 장비 조합 세트 아이템 활성화 정보 조회
>item_multi_set_equip_detail()

#### 31. 직업정보
>jobs()

#### 32. 직업별 스킬 리스트
>job_skill()

#### 33. 직업별 스킬 상세 정보 조회
>job_skill_detail()