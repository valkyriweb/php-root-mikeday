<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 22:19
     */
    
    class Policy implements CurlRequest {
        public $applicationID;
    
        /**
         * Policy constructor.
         * @param $applicationID
         */
        public function __construct($applicationID) {
            $this->applicationID = $applicationID;
        }
    
    
        public function createRequest($curl) {
            $postFields = "{\n\t\"application_id\": \"$this->applicationID\"\n}";
            return createCurl($curl, "quotes", $postFields);
        }
    }