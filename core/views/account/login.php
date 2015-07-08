<!-- Modal -->
<div class="modal fade" id="myLogin" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                <div class="help">Enabling Access for an Application, you must login. In case you have not created an account you must first sign up.</div>    

            </div>
            <div class="modal-body">
                
                
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
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


