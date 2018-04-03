<?php
    /**
     * The idea behind this class is to contain the details of the chat is to be replied to as policyholder != person chatting.
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
