    <div class="help">User registration form for the RadFlow application.</div>

    <form role="form" action='<?php $this->link(['core' => 'account', 'action' => 'register']); ?>' method='POST' onsubmit='return checkLog()' >


        <div class="form-group">  
            <label for='email'>E - mail: </label>
            <input class="form-control" type='text' name='email_user'>
        </div>
        
        <div class="form-group">  
            <label for='password'>Password: </label>
            <input class="form-control" type='password' name='password'>
        </div>

        <div class="form-group">  
            <label for='passwordVerify'>Confirm pwd: </label>
            <input class="form-control" type='password' name='passwordVerify'>
        </div>

        <input class="btn btn-default" type='submit' value='Create an account' name='regist'>

    </form>

