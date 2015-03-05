    <?php if (!$this->user->isLogged()): ?>
    
        <a <?php $this->link('render=loginForm');?>>SIGN IN</a>
        <a <?php $this->link('render=registerForm');?>>REGISTER</a>
        
    <?php endif; ?>

    <?php

    $this->render('loginForm');

    $this->render('registerForm');
    
    ?>