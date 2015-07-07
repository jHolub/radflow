<?php

class ControllerService {

    private $object;
//  The Instance of viewService  
    public $view;
    
    public $model;
    
    private static $saveParam = array('action', 'render', 'handle', 'msg', 'core','error');

    public function __construct($obj) {

        $this->object = $obj;
//  Initialization of view after process control     
        $this->view = new ViewsService($obj);
        
        if(file_exists(\GLOBALVAR\MODELS_PATH . '/' . $_GET['core'] . 'Data.php')){
                
            require_once \GLOBALVAR\LIB_PATH . "/class.DBConnection.php";
                
            require_once \GLOBALVAR\MODELS_PATH .'/'. $_GET['core'] .'Data.php';
                
            $class = $_GET['core']."Data";
            
            $this->model = new $class();                
        }

// init variable from url, the variable must be declared in controller class like public      
        foreach ($_GET as $key => $value) {

            if (!in_array($key, ControllerService::$saveParam) && array_key_exists($key ,get_object_vars($this->object)) ) {
// only alphanumeric character
                 if(ctype_alnum ($value)){
                     
                     $this->object->$key = $value;    

                 }else{
                     
                    ErrorLogHandling::register("Variable is not accessible for initialization. NAME: $key; VALUE: $value  " . __LINE__ . " ,method: " . __METHOD__ );
                    
                 }                     
            }
        }

        if (isset($_GET['handle']) && method_exists($this->object, 'handle_' . $_GET['handle']) && !empty($_POST)) {

            call_user_func(array($this->object, 'handle_' . $_GET['handle']), $_POST);
            
        }
// argument: action muze volat vice metod, jednotlive metody jsou oddeliny pomoci znaku : %
        if (isset($_GET['action'])) {
            
            $methods = explode("%", $_GET['action']);

            for($i = 0; $i < count($methods); $i++){  
                if(method_exists($this->object, 'action_' . $methods[$i])){

                    call_user_func(array($this->object, 'action_' . $methods[$i]));

                }
            }
        }
        
        if (isset($_GET['render'])) {
            
            $this->view->render = $_GET['render'];  
            
  // pred vlozenim patricne stranky se zavola funkce beforeRender dojde k inicializaci promennych pro danou sablonu            
            if(method_exists($this->object, 'beforeRender_' . $_GET['render'])){
                
                $return = call_user_func(array($this->object, 'beforeRender_' . $_GET['render']));
/// v pripade, ze fce. beforeRender vrati FALSE, vysledny render nebude proveden             
                if( $return === FALSE ){
                 
                    $this->view->render = FALSE;
                }
            }         
        }
    }
    
    public function get_msg() {

        echo htmlspecialchars($this->msg);
    }

}

?>
