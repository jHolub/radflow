<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php $this->link([]); ?>">RadFlow
            </a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li <?php if ($this->core == 'account'): ?>class="active" <?php endif; ?>><a href='<?php $this->link(['core' => 'account']); ?>'>About</a></li>
                <?php if ($this->user->isLogged()): ?>
                    <li <?php if ($this->core == 'source'): ?>class="active" <?php endif; ?>><a href='<?php $this->link(['core' => 'source']); ?>'>Dataset</a></li>
                    
                    <?php if (SessionService::getInstance()->get('sourceName')): ?> 
                        <li <?php if ($this->core == 'globalConf' || $this->core == 'meshGen' || $this->core == 'mesh1d' || $this->core == 'mesh2d' || $this->core == 'waterConf'): ?>class="dropdown active"<?php else: ?>class="dropdown"<?php endif; ?>>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data analysis
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php $this->link(['core' => 'jacob']); ?>">Jacob method</a></li>
                                <li><a href="<?php $this->link(['core' => 'theis']); ?>">Theis method</a></li>
                                <li><a href="<?php $this->link(['core' => 'stehfest']); ?>">Real well (Agarwal)</a></li> 
                            </ul>
                        </li>
                    <?php endif; ?>
                        
                <?php endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <?php if ($this->user->isLogged()): ?>
                    <li><a><span class="glyphicon glyphicon-user"></span></a></li>
                <?php else: ?>
                    <li><a>You are:</a></li>  
                <?php endif; ?>
                <li><a><?php $this->write($this->user->getUserName()); ?></a></li> 


                <?php if ($this->user->isLogged()): ?>

                    <li><a href="<?php $this->link(['core' => 'account', 'action' => 'logout']); ?>"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li> 

                <?php else: ?>
                    <li><a href="<?php $this->link(['core' => 'account', 'render' => 'register']); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="<?php $this->link(['core' => 'account', 'render' => 'login']); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php endif; ?>

                <?php if (SessionService::getInstance()->get('modelName')): ?> 

                    <li><a><?php echo htmlspecialchars(SessionService::getInstance()->get('modelName')); ?></a></li>

                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
