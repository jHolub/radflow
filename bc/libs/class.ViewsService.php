<?php

class ViewsService {

// Initialization in Class BootUp.php    
    public $core;    
    public $model;
    public $render;
    public $user;

    public function __construct($control) {

        $this->user = new UserService();

        $this->model = $control;
    }

// render(string - name of included file, string or array(string) - permission rules)
    public function render($temp, $permit = NULL) {

// pokud je nastaveno opravneni, je provedena autorizace uzivatele
        if (!empty($permit)):

            if (!$this->user->isAllowed($permit)) {

                ErrorLogHandling::register("Unauthorized access attempted . TEMP: $temp  " . __LINE__ . " ,method: " . __METHOD__);
                return FALSE;
            }

        endif;

        if ($this->render == $temp) {

            $path = \GLOBALVAR\VIEWS_PATH . "/" . $this->core . "/" . $temp . '.php';

            if (file_exists($path)) {

                require_once $path;
            } else {

                require_once \GLOBALVAR\VIEWS_PATH . "/error/index.php";
            }
        }
    }

    public function embed($file) {

        if (file_exists(\GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/' . $file)) {

            include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/' . $file;
        }
    }

    public function write($str) {

        if (!empty($str)) {

            echo htmlspecialchars($str);
        }
    }

    public function link($anchor){
        
        if(!strpos('core', $anchor)){
        
            $anchor = "core=" . $this->core . "&" . $anchor;
        }
        
        echo "href= '" . \GLOBALVAR\ROOT . "?" . $anchor . "'";
    }
    
    public function render_header() {

        if (file_exists(\GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/header.php')) {

            include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/header.php';
        } else {

            include \GLOBALVAR\BASE_PATH . '/req/header.php';
        }
    }

    public function render_navi() {

        if (file_exists(\GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/navi.php')) {

            include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/navi.php';
        } else {

            include \GLOBALVAR\BASE_PATH . '/req/navi.php';
        }
    }

    public function render_foot() {
        
        if(file_exists(\GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/foot.php')){
            
            include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/foot.php';            
        }else{
            
            include \GLOBALVAR\BASE_PATH . '/req/foot.php';            
        }
    }

    public function render_page() {

        include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/index.php';
    }

    public function render_webHead() {

        include \GLOBALVAR\VIEWS_PATH . '/' . $this->core . '/head.php';
    }

}

?>