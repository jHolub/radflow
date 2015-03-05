
<a href='<?php echo \GLOBALVAR\ROOT; ?>'>ACCOUNT</a>

<?php if($this->user->isLogged()):?>

<a href='<?php echo \GLOBALVAR\ROOT; ?>?core=source'>DATASET</a>

    <?php if(SessionService::getInstance()->get('sourceName')):?>

        <a href='<?php echo \GLOBALVAR\ROOT; ?>?core=jacob'>APL - Jacob method</a>
        <a href='<?php echo \GLOBALVAR\ROOT; ?>?core=theis'>APL - Theis method</a>
        <a href='<?php echo \GLOBALVAR\ROOT; ?>?core=stehfest'>APL - Real well</a>
        
     <?php endif;?>

<a href='<?php echo \GLOBALVAR\ROOT; ?>?core=manual'>MANUAL</a>

 <?php endif;?>

<a href='<?php echo \GLOBALVAR\ROOT; ?>?core=contact'>CONTACT</a>