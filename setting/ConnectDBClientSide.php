<?php

// author: J. Holub
// description: the DBconnection for client-side scripts (AJAX)


require_once 'config.php';

require_once \GLOBALVAR\SETTING_PATH.'/class.DBconfig.php'; 


class ConnectDBClientSide extends DBconfig{
    
    public $connection;
    
    public function __construct() {
        
        $config = new Dbconfig;
        
        $this->connection = pg_connect("host='".$config->serverName."' port='".$config->serverPort."'dbname='".$config->dbName."' user='".$config->userName."'password='".$config->passCode."'");
        
    }
    
}

$obj = new ConnectDBClientSide();

$connect = $obj->connection; 

?>
