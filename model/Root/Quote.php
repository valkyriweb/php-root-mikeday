<?php

class Quote implements CurlRequest {
    public $type, $modelName;

    public function __construct($modelName, $type = "root_gadgets"){
        $this->type = $type;
        $this->modelName = $modelName;
    }
    
    public function createRequest($curl) {
        $postFields = "{\n\t\"type\": \"" . $this->type . "\",\n\t\"model_name\": \"" . $this->modelName . "\"\n}";
        return createCurl($curl, "quotes", $postFields);
    }
}