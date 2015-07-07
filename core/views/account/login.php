
    <div class="help">Enabling Access for an Application, you must login. In case you have not created an account you must first sign up.</div>    

    <form role="form" action='<?php $this->link(['core' => 'account', 'action' => 'login']); ?>' method='POST' onsubmit='return checkLog()' >

        <div class="form-group"> 

            <label for='email'>E - mail: </label>

            <input class="form-control" type='text' name='email_user'>

        </div>
        <div class="form-group">                  

            <label for='password'>Password: </label>

            <input class="form-control" type='password' name='password'>

        </div>     
        
        <input class="btn btn-default" type='submit' value='Log in' name='login'>
        
    </form>



