<?php
    /**
     * Created by PhpStorm.
     * User: Temporary
     * Date: 2018/04/03
     * Time: 20:06
     */
    
    require_once('environmentVariables.php');
    
    //root models
    // interfaces
    require_once ('Root/CurlRequest.php');
    // classes
    require_once ('Root/Application.php');
    require_once ('Root/PolicyHolder.php');
    require_once ('Root/Policy.php');
    require_once ('Root/Quote.php');
    
    
    //chat models
    require_once ('Chat/Client.php');