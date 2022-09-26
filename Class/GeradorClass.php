<?php

class Gerador{

    protected $token;
    protected $url;
    protected $headers;
    public $type;

    public function __construct($token){

        return $this->token = $token;

    }

    public function setType($type){
        
        $this->type = $type;

    }

    public function getUrl(){
     
       return $this->url = 'https://gerador.app/api/'.$this->type.'/generate';

    }

    public function getHeaders(){
        return $this->headers = ["Accept: application/json",
        "Authorization: Bearer ".$this->token];
    }
    
    public function jsonDecode($json){

        return json_decode($json);

    }

    public function gerar(){
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        return $this->jsonDecode($response);

        }
}