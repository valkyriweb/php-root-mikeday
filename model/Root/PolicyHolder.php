<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 20:21
     */
    
    class PolicyHolder implements CurlRequest {
        public $id = [], $firstName, $lastName, $email, $company, $policyholderId, $createdAt, $createdBy;
    
        /**
         * PolicyHolder constructor.
         * @param array $id consists of, use key => value. Default: type => id, number => number, country => ZA
         * @param $firstName
         * @param $lastName
         * @param $email
         * @param $company String
         * @param $policyholderId String
         * @param $createdAt String not required, for reponse.
         * @param $createdBy String
         */
        public function __construct($firstName, $lastName, $email, $company, array $id = ["type" => "id", "number" => "6801015800084", "country" => "ZA"]
            , $policyholderId = null, $createdAt = null, $createdBy = null) {
            
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->company = $company;
            $this->policyholderId = $policyholderId;
            $this->createdAt = $createdAt;
            $this->createdBy = $createdBy;
        }
    
    
        public function createRequest($curl) {
            /*
             * Options 1
             */
            
//            $postFields = "{\n\t\"id\": {\n\t\t\"type\": \"$this->id['type']\",\n\t\t\"number\": \"$this->id['number']\",\n\t\t\"country\": \"$this->id['country']\"\n\t},\n\t\"first_name\": \"$this->firstName\",\n\t\"last_name\": \"$this->lastName\",\n\t\"email\": \"$this->lastName\"\n}"
            
            /*
             * Option 2:
             */
            $postArray = [
                "id" => [
                    "type"      => "$this->id['type']",
                    "number"    => "$this->id['number']",
                    "country"   => "$this->id['country']"
                 ],
                "first_name"  => "$this->firstName",
                "last_name"   => "$this->lastName",
                "email"       => "$this->lastName",
                "app_data" => [
                  "company"   => "$this->company"
                ]
            ];
            $postFields = json_encode($postArray);
            
            
            return createCurl($curl, "policyholders", $postFields);
            //TODO: figure out the forbidden error. Issue 1
        }
    
    }