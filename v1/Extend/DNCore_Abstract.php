<?php

declare(strict_types=1);

namespace DNCore\Extend;

abstract class DNCore_Abstract {

    protected $DfApiUrl = "https://api.neople.co.kr/df";
    protected $urls = "";
    protected $Form = array();
    protected $Data = array();
    protected $Query = array();
    protected $Sort = array();
    protected $Result = array();

    public function __construct(String $apiKey){
        $this->Data['apikey'] = $apiKey ?? "";
        $this->init();
    }

    abstract function init() : self;

    public function dataCheck() : self {
        $this->urls = str_replace("jobId",$this->Data['jobId'] ?? "",$this->urls);
        $this->urls = str_replace("serverId",$this->Data['serverId'] ?? "",$this->urls);
        $this->urls = str_replace("characterId",$this->Data['characterId'] ?? "",$this->urls);
        $this->urls = str_replace("skillId",$this->Data['skillId'] ?? "",$this->urls);
        $this->urls = str_replace("itemId",$this->Data['itemId'] ?? "",$this->urls);
        $this->run();
        return $this;
    }



    protected function exUrl(String $name) : String{
        $nc = str_replace("DNCore_API_","",$name);
        $nc = str_replace("_Class","",$nc);
        $nc = str_replace("ClassList","",$nc);
        $nc = str_replace(__NAMESPACE__,"",$nc);
        $nc = str_replace("\\","_",$nc);
        $nc = str_replace("_","/",$nc);
        $nc = str_replace("//","/",$nc);
        $this->urls = $this->DfApiUrl.$nc;
        return $nc;
    }

    public function makeUrl() : self {
        $this->urls = str_replace("serverId","serverId/cain",$this->urls);
        $this->urls = str_replace("characterId","characterId/939393",$this->urls);
        return $this;
    }

    public function getData(): array {
        $this->Form['urls'] = $this->urls;
        if(sizeof($this->Data)){
            $this->Form['DataCount'] = sizeof($this->Data);
            $this->Form['Data'] = $this->Data;
        }
        if(sizeof($this->Query)){
            $this->Form['QueryCount'] = sizeof($this->Query);
            $this->Form['Query'] = $this->Query;
        }
        if(sizeof($this->Sort)){
            $this->Form['SortSize'] = sizeof($this->Sort);
            $this->Form['Sort'] = $this->Sort;
        }
        $this->Form['Result'] = $this->Result;
        $this->Form['Date'] = time();
        return $this->Form ?? array();
    }

    public function getJsonData(): String {
        return json_encode($this->getData()) ?? "";
    }

    protected function setData(String $name,$value) : self {
        return $this->setTo(1,$name,$value);
    }

    protected function setQuery(String $name,$value) : self {
        return $this->setTo(2,$name,$value);
    }

    protected function setSort(String $name,$value) : self {
        return $this->setTo(3,$name,$value);
    }

    protected function setTo(int $target,String $name,$value) : self{
        switch ($target){
            case 1:
                $this->Data[$name] = $value;
                return $this;
            case 2:
                $this->Query[$name] = $value;
                return $this;
            case 3:
                $this->Sort[$name] = $value;
                return $this;
            default:
                return $this;
        }
    }

    protected function sumData() : String {
        return $this->sumAPI($this->Data,"","=","&");
    }

    protected function sumQuery() : String {
        return $this->sumAPI($this->Query,"&q=",":",",");
    }

    protected function sumSort() : String {
        return $this->sumAPI($this->Sort,"&sort=",":",",");
    }

    protected function sumAPI(array $data,String $method,String $a1,String $a2) : String {
        if (sizeof($data) == 0) return "";
        $r=array();
        foreach ($data as $item => $value){
            $t = gettype($value);
            if($t=="string") if (strlen($value)!=0) $r[] = $item.$a1.$value;
            if($t=="boolean") if ($value!=null) $r[] = $item.$a1.$value;
            if($t=="integer") if ($value!=0) $r[] = $item.$a1.$value;
        }
        return $method.implode($a2,$r) ?? "";
    }

    public function run() : self {
        $this->urls = $this->urls."?".$this->sumData().$this->sumQuery().$this->sumSort();
        $this->Result = json_decode($this->curls($this->urls),true) ?? array();
        return $this;
    }

    protected function curls($url) : String{
        $ch = curl_init();
        $urls = $url;
        curl_setopt($ch, CURLOPT_URL, $urls);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }


}