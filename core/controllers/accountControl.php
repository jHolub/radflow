<?php

class accountControl extends ControllerService{
    
    public $msg;
    
    public function __construct(){        
        
           parent::__construct($this);     
    }
    
// handle: processing form (especially POST)    
    public function handle_login($post){
        
        $email = $post['email_user'];
        $pass = $post['password'];
        
        $row = accountData::getAccountData($email);    //pg_fetch_array($res); 
            if(!$row){
            
                $this->msg = 'User does not exist.';
                
                return false;
            }
 
            if($row['pass']!= crypt($pass, $row['pass'])){
            
                $this->msg = 'Password is incorrect.';
                
                return false;
            }
      
            SessionService::getInstance()->login(1, $email, "logged"); 
          
            $this->msg = "Successful logged in.";
            
            if(accountData::isSetDataBase(SessionService::getInstance()->get('userName'))){
                
                SessionService::getInstance()->set("data_base",TRUE);
                
            }
            
            return true;        
    }
 
    public function handle_register($post){
          
         
        $email = $post['email_user'];
        $password = $post['password'];
            
            if($password !== $post['passwordVerify']){

		$this->msg = 'The password and confirmation password do not match.';
		return false;
            }   
          
            if(AccountData::getAccountData($email)){

                $this->msg = 'Email already exist.';
                return false;

            }

            if(!AccountData::registerData($email, $password)){

                $this->msg = 'Sorry your registration failed. Please go back and try again';
                return false;    

            }

        $this->msg = ' Successful sign in.';
        return true;  
        
    }
    
     public function action_logOut() {
        
        SessionService::getInstance()->destroy();
        URLService::redirect();        
    }   
    
} 