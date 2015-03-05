

<div id='user_panel'>
    <table>
        <?php if ($this->user->isLogged()): ?>
            <tr>
                <td>
                    User: <b><?php $this->write($this->user->getUserName()); ?></b>
                    <a href='./?core=account&action=logOut'>LOG OUT</a>
                </td>                
            </tr>
            <?php if (SessionService::getInstance()->get('sourceName')):?>
               <tr>
                <td>
                    DATASET: <b><?php $this->write(SessionService::getInstance()->get('sourceName')); ?></b>
                </td>                
            </tr>         
            <?php endif;?>
        <?php endif; ?>

        <?php if (!$this->user->isLogged()): ?>   
            <tr>
                <td>
                    User: <?php $this->write($this->user->getUserName()); ?><br>
                    <a href='./?core=account&render=loginForm'>SIGN IN</a>
                    OR
                    <a href='./?core=account&render=registerForm'>REGISTER</a>
                </td>
            </tr>
        <?php endif; ?> 
    </table>
</div>

<a href="<?php echo \GLOBALVAR\ROOT; ?>"><h1>RadFlow</h1></a>