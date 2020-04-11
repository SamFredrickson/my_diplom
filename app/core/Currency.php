<?php

class Currency{
    private $usd;
    private $euro;

    private function ParseCurrency(){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".date("d/m/Y"));
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        
        
        $result = curl_exec($ch);
        
        $xml = $result;
        $xml_obj = new SimpleXMLElement($xml);
        
        $xml = $xml_obj->xpath("//Valute[@ID='R01235']"); 
        $this->usd = substr(strval($xml[0]->Value), 0, -2); 
        $xml = $xml_obj->xpath("//Valute[@ID='R01239']"); 
        $this->euro = substr(strval($xml[0]->Value), 0, -2);
    }

    public function __construct(){
        $this->ParseCurrency();
    }

    public function GetCurrency(){
        return array(
            'usd'  => $this->usd, 
            'euro' => $this->euro
        );
    }
}