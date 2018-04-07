<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 22:05
     */
    
    class Application implements CurlRequest {
        public $monthlyPremium, $quotePackageID, $serialNumber, $policyholderID;
    
        /**
         * Application constructor.
         * @param $monthlyPremium int e.g. 5000
         * @param $policyholderID String
         * @param $quotePackageID String
         * @param string $serialNumber int 10 digits
         */
        public function __construct($monthlyPremium, $policyholderID = "", $quotePackageID = "", $serialNumber = "") {
            $this->monthlyPremium = $monthlyPremium;
            $this->quotePackageID = $quotePackageID;
            $this->serialNumber = $serialNumber;
            $this->policyholderID = $policyholderID;
        }
    
        public function createRequest($curl) {
            $postFields =  "{\n\t\"policyholder_id\": \"$this->policyholderID\",\n\t\"quote_package_id\": \"$this->quotePackageID\",\n\t\"monthly_premium\": $this->monthlyPremium\n}";
            return createCurl($curl, "applications", $postFields);
        }
    }