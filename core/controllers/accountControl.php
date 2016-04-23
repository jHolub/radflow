<?php

class accountControl extends ControllerService{
    
    public function __construct(){        
        
           parent::__construct($this);     
    }
    
    public function action_main(){
        
        return[];
    } 


// handle: processing form (especially POST)    
    public function action_login(){
        
        $email = $this->post['email_user'];
        $pass = $this->post['password'];
        
        $row = accountData::getAccountData($email);    //pg_fetch_array($res); 
            if(!$row){
            
                $this->msg = 'User does not exist.';
                
                return [];
            }
 
            if($row['pass']!= crypt($pass, $row['pass'])){
            
                $this->msg = 'Password is incorrect.';
                
                return [];
            }
      
            SessionService::getInstance()->login(1, $email, "logged"); 
          
            $this->msg = "Successful logged in.";
            
            if(accountData::isSetDataBase(SessionService::getInstance()->get('userName'))){
                
                SessionService::getInstance()->set("data_base",TRUE);
                
            }
            
            return [];        
    }
 
    public function action_register(){
          
         
        $email = $this->post['email_user'];
        $password = $this->post['password'];
            
            if($password !== $this->post['passwordVerify']){

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
            
            $this->action_login();

        $this->msg = ' Successful sign in.';
        return [];  
        
    }
    
     public function action_logOut() {
        
        SessionService::getInstance()->destroy();
        URLService::redirect();        
    }   
    
} 