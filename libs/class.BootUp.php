<?php

class BootUp {
// The Instance of appropriate Controller class  
    public $control;

    public function __construct() {

        if (isset($_GET['core'])) {

            if(file_exists(\GLOBALVAR\CONTROLLERS_PATH . '/' . $_GET['core'] . 'Control.php')){
                
                require_once \GLOBALVAR\CONTROLLERS_PATH .'/'. $_GET['core'] .'Control.php';

                $class = $_GET['core']."Control";

                $this->control = new $class();

                $this->control->view->core = $_GET['core'];
            }else{
    
                URLService::getError();
            }
        } else {
            
            URLService::redirect(\GLOBALVAR\ROOT . '/?core=account');
            
        }
    }
}

?>
