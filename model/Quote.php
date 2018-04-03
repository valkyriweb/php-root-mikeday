<?php

class Authorization {
    public static $sandbox = "sandbox_YWY2NjVlMTItMGRjZi00YmYyLWE5NDAtYzYzYjZiMzkzYmJhLm9Lb1NSU3p3RGhROTEzcEhzNHQ1V1c1SW5mXzU3YzA1";
}

class ClientChat {
    public $clientID, $clientFirstName, $clientLastName;

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
}