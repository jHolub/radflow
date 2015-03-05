<h3>Create your personal account</h3>
<table> 
    <form action='<?php echo \GLOBALVAR\ROOT; ?>/?core=account&handle=register' method='POST' name='registerForm' onsubmit='return checkRegister()'>
        <tr>
            <td>
                <label for='email'>EMAIL:</label>
            </td>
            <td>
                <input type='text' name='email_user'> 
            </td>
        </tr>
        <tr>
            <td>
                <label for='password'>PASWORD: </label>
            </td>
            <td>
                <input type='password' name='password'>
            </td>
            </tr>
            <tr>
                <td> 
                    <label for='passwordVerify'>CONFIRMING PASSWORD:</label> 
                </td>
                <td>
                    <input type='password' name='passwordVerify'>
                </td>
            </tr>   
            <tr>
                <td>       
                    <input type='submit' value='Create new account' name='regist'>
                </td>
            </tr>
    </form>

</table>    
