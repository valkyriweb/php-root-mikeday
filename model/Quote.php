<?php

class Authorization {
    public static $sandbox = "sandbox_YWY2NjVlMTItMGRjZi00YmYyLWE5NDAtYzYzYjZiMzkzYmJhLm9Lb1NSU3p3RGhROTEzcEhzNHQ1V1c1SW5mXzU3YzA1";
}

class ClientChat {
    public $clientID, $clientFirstName, $clientLastName;
    
    /** Hi I am a client chat
     * ClientChat constructor.
     * @param $clientID
     * @param $clientFirstName
     * @param $clientLastName
     */
    public function __construct($clientID, $clientFirstName, $clientLastName) {
        $this->clientID($clientID);
        $this->clientFirstName($clientFirstName);
        $this->clientLastName($clientLastName);
    }
    
}

class Quote extends Authorization { 
    public $type, $modelName;

    public function __construct($modelName, $type = "root_gadgets"){
        $this->type = $type;
        $this->modelName = $modelName;
    }

    public function getJSON(){
        return [
            "authorization" => Authorization::$sandbox,
            "type" => $this->type,
            "model_name" => $this->modelName
        ];
    }
    
    public function createRequest($curl) {
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.root.co.za/v1/insurance/quotes",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n\t\"type\": \"" . $this->type ."\",\n\t\"model_name\": \"". $this->modelName . "\"\n}",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . base64_encode(Authorization::$sandbox),
                "Cache-Control: no-cache",
//                "Postman-Token: ca2240cc-19d1-43ac-b652-1c30715fca18",
                "Content-Type: application/json"
            ),
        ));
        return $curl;
    }
}