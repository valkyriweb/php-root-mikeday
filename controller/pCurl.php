<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 20:15
     */
    /**
     * @param $curl Curl pass curl object
     * @param $type String enter type of curl, e.g. quotes
     * @param $postFields String note, you can copy-paste the format from Postman, pick POST, Code, PHP > cURL
     * @return Curl
     */
    function createCurl($curl, $type, $postFields) {
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.root.co.za/v1/insurance/" . $type,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . base64_encode(Authorization::$sandbox),
                "Cache-Control: no-cache",
//                 "Postman-Token: ca2240cc-19d1-43ac-b652-1c30715fca18",
                "Content-Type: application/json"
            ),
            CURLINFO_HEADER_OUT => true, //only use for debugging.
        ));
        return $curl;
    }