
<?php

class jacobControl extends ControllerService {

    protected $msg;

    public function __construct() {

        parent::__construct($this);

// neopravneny pristup
        if (!SessionService::getInstance()->get('sourceName') || !SessionService::getInstance()->get('userName')) {

            URLService::redirect(\GLOBALVAR\ROOT . "/?core=source");
        }

        $this->printData();
        
        $this->printDataObserv();
        
        $this->sourceData = jacobData::getSourceData(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'));
    }

    public function printData() {

        $data = jacobData::getData(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'));

        if ($data) {
            $this->graphData['t'] = 0;
            $this->graphData['s'] = 0;

            for ($i = 0; $i < count($data["s"]); $i++) {
                
                $this->graphData['t'] = $this->graphData['t'] . "," . $data["t"][$i];
                $this->graphData['s'] = $this->graphData['s'] . "," . $data["s"][$i];
            }
        } else {

            $this->msg = 'Data is empty.';
        }
    }
 
        public function printDataObserv() {

        $data = jacobData::getDataObserv(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'));

        if ($data) {
            
            $this->graphDataObserv['t'] = 0;
            $this->graphDataObserv['s'] = 0;

            for ($i = 0; $i < count($data["s"]); $i++) {
                
                $this->graphDataObserv['t'] = $this->graphDataObserv['t'] . "," . $data["t"][$i];
                $this->graphDataObserv['s'] = $this->graphDataObserv['s'] . "," . $data["s"][$i];
            }
        } else {

            $this->msg = 'Observ data is empty.';
        }
    }
    
    public function handle_saveParametrs($post){
        
        if(jacobData::saveParametrs(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'),$post)){
        
            $this->msg = "Data has been saved successfully.";
        }else{
            
            $this->msg = "Something was wrong. Try again.";    
        }
    }    

}

?>