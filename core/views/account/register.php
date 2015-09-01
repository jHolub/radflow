<!-- Modal -->
<div class="modal fade" id="myRegister" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="help">Uživatelská registrace do aplikace Radflow.</div>
            </div>
            <div class="modal-body">


                <form role="form" action='<?php $this->link(['core' => 'account', 'action' => 'register']); ?>' method='POST' onsubmit='return checkLog()' >


                    <div class="form-group">  
                        <label for='email'>E - mail: </label>
                        <input class="form-control" type='text' name='email_user'>
                    </div>

                    <div class="form-group">  
                        <label for='password'>Heslo: </label>
                        <input class="form-control" type='password' name='password'>
                    </div>

                    <div class="form-group">  
                        <label for='passwordVerify'>Potvrzení hesla: </label>
                        <input class="form-control" type='password' name='passwordVerify'>
                    </div>

                    <input class="btn btn-default" type='submit' value='Vytvořit účet' name='regist'>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Zavři</button>
            </div>
        </div>

    </div>
</div>



