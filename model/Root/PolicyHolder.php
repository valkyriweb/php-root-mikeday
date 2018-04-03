<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 20:21
     */
    
    class PolicyHolder {
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
            $postArray = [
                "id" => [
                    "type"      => "id",
                    "number"    => "6801015800084",
                    "country"   => "ZA"
                 ],
                "first_name"  => "Erlich",
                "last_name"   => "Bachman",
                "email"       => "erlich@avaito.com",
                "app_data" => [
                  "company"   => "Aviato"
                ]
            ];
            
            $postFields = json_encode($postArray);
            return createCurl($curl, "policyholders", $postFields);
            //TODO: figure out the forbidden error. Issue 1
        }
    
    }