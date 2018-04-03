<?php




class Quote {
    public $type, $modelName;

    public function __construct($modelName, $type = "root_gadgets"){
        $this->type = $type;
        $this->modelName = $modelName;
    }
    
    public function createRequest($curl) {
        $postFields = "{\n\t\"type\": \"" . $this->type . "\",\n\t\"model_name\": \"" . $this->modelName . "\"\n}";
        var_dump($postFields);
        return createCurl($curl, "quotes", $postFields);
    }
}