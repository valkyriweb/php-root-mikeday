<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 20:12
     */
    
    class ClientChat {
        public $clientID, $clientFirstName, $clientLastName;
        
        /** Hi I am a client chat
         * ClientChat constructor.
         * @param $clientID
         * @param $clientFirstName
         * @param $clientLastName
         */
        public function __construct($clientID, $clientFirstName, $clientLastName) {
            $this->clientID = $clientID;
            $this->clientFirstName = $clientFirstName;
            $this->clientLastName = $clientLastName;
        }
        
    }
