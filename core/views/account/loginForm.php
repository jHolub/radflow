<h3>SIGN IN</h3>
        
<form action='<?php echo \GLOBALVAR\ROOT;?>/?core=account&handle=login' method='POST' name='logForm' onsubmit='return checkLog()' >

<label for='email'>EMAIL: <input type='text' name='email_user'></label><br>

<label for='password'>PASSWORD: <input type='password' name='password'></label><br>

<input type='submit' value='Confirm' name='login'>


        