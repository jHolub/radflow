<?php

class sourceControl extends ControllerService {

    protected $msg;
    
    public $source;
    public $sourceData;
    // helper if saved data is from observation well 
    public $observData = 0;    

    private $activeSource;
    
    public function __construct() {

        parent::__construct($this);

// neopravneny pristup
        if (!SessionService::getInstance()->get('userIsLogged')) {
            // presmerovani na prihlaseni     
            URLService::redirect();
        }

        $this->list = $this->getListModels();

        $this->activeSource = SessionService::getInstance()->get('sourceName');
        
        if($this->activeSource){
            
            $this->sourceData = sourceData::getSourceData(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'));
        }
    }

    private function getListModels() {

        $space = SessionService::getInstance()->get('userName');

        $list = sourceData::dataListModel($space);
        $list = array_slice($list, 2);
//alphabetic sort
        sort($list);

        return $list;
    }
    
    public function handle_saveParametrs($post){
        
        if(sourceData::saveParametrs(SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'),$post)){
        
            $this->msg = "Data has been saved successfully.";
        }else{
            
            $this->msg = "Something was wrong. Try again.";    
        }
    }

    public function handle_newSource($post) {

        $domain = SessionService::getInstance()->get('userName');

        if (sourceData::modelExists($domain, $post['name_source'])) {
            $this->msg = 'Sorry, this source already exists.';
            return;
        }

        if (sourceData::maxModelNumber($domain)) {
            $this->msg = 'Over maximum number of sources..';
            return;
        }

        if (!sourceData::createDomain($domain, $post['name_source']) || !sourceData::createConfig($domain, $post['name_source'])) {

            $this->msg = 'Failed to create source.';
        }

        $this->delParamSession();
        SessionService::getInstance()->set('sourceName', $post['name_source']);
    }

    public function action_saveDataSource() {

        $file = $_FILES;

        if ($file["file"]["error"] > 0) {

            $this->msg = 'File error';
            return;
        }

        if ($file["file"]["type"] !== 'text/plain') {

            $this->msg = 'Soubor musi byt typu TXT.';
            return;
        }

        if ($file["file"]["size"] > 50000) {

            $this->msg = "Soubor je příliš velký. Velikost:" . $file["file"]["size"] . " Maximální velikost je 50000bajtů.";
            return;
        }

        if (sourceData::saveData($file, $file["file"]["name"], SessionService::getInstance()->get('userName'), SessionService::getInstance()->get('sourceName'),$this->observData)) {

            $this->msg = 'Data uložena';
        } else {

            $this->msg = 'Data se nepodařilo uložit. Opakujte akci.';
        }
    }

    public function action_delDataSource() {

        if (sourceData::delData(SessionService::getInstance()->get('userName'),SessionService::getInstance()->get('sourceName'),$this->observData)) {

            $this->msg = 'Data odstraněna';
        } else {

            $this->msg = "Data se nepodařilo odstranit. Zkuste znovu.";
        }
    }

    public function action_setSource() {

        $domain = SessionService::getInstance()->get('userName');

        if (sourceData::modelExists($domain, $this->source)) {
            $this->delParamSession();
            SessionService::getInstance()->set('sourceName', $this->source);

            $this->msg = 'The source selected.';
        } else {
            $this->msg = 'The source does not exist.';
        }
    }

    public function action_delSource() {

        $domain = SessionService::getInstance()->get('userName');

        if (sourceData::modelExists($domain, $this->source)) {

            if (sourceData::deleteModel($domain, $this->source)) {

                if ($this->source == SessionService::getInstance()->get('sourceName')) {
                    $this->delParamSession();
                    SessionService::getInstance()->clear('sourceName');
                }

                $this->msg = 'The source has been deleted.';
            };
        } else {
            $this->msg = 'The source cannot be deleted.';
        }
    }    

    private function delParamSession() {
        
    }
    
    public function getActiveSource(){
        
        return $this->activeSource;
    }

}

?>