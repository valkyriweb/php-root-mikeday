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
    
    public function createRequest() {
        $request = new HttpRequest();
        $request->setUrl('https://sandbox.root.co.za/v1/insurance/quotes');
        $request->setMethod(HTTP_METH_POST);
    
        $request->setHeaders(array(
//            'Postman-Token' => '396500b4-20be-40bc-94f8-f35ed15aef89',
//            'Cache-Control' => 'no-cache',
            'Authorization' => 'Basic ' . base64_encode(Authorization::$sandbox),
            'Content-Type' => 'application/json'
        ));
    
        $request->setBody('{
            "type": "root_gadgets",
            "model_name": "iPhone 5"
        }');
        return $request;
    }
}