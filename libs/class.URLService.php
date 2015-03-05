<?php

class URLService{
    
    static public function redirect($path = \GLOBALVAR\ROOT){
        
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ". $path );
        header("Connection: close");
            
    }
    
    static public function getError(){

        ErrorLogHandling::register("Error is occured. USER ID:". SessionService::getInstance()->get('userId') ." DATE: ". date("Y-m-d H:i:s"));

        if(file_exists(\GLOBALVAR\CONTROLLERS_PATH . '/errorControl.php')){
        
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".\GLOBALVAR\ROOT."/?core=error");
            header("Connection: close");        
        }
        
    }    
}
?>