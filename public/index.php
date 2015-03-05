<?php

require_once '../setting/config.php';

require_once \GLOBALVAR\LIB_PATH . '/class.ErrorLogHandling.php';

require_once \GLOBALVAR\LIB_PATH . '/class.URLService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.SessionService.php';

require_once \GLOBALVAR\LIB_PATH."/class.DBPostgreSQLService.php";

//require_once BASE_PATH."/setting/class.DBMySQLService.php";

require_once \GLOBALVAR\LIB_PATH . '/class.UserService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.MailService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.ViewsService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.ModelService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.ControllerService.php';

require_once \GLOBALVAR\LIB_PATH . '/class.BootUp.php';


$home = new BootUp();

$view = $home->control->view;

?>

<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="author" content="J.Holub, Fzp - CZU" />
        <meta name="project" content="RadFlow" />
        <meta name="language" content="czech" />
        <meta name="country" content="cz" />
        <meta http-equiv="content-language" content="cs" />
        <link rel="stylesheet" href="<?php echo \GLOBALVAR\ROOT; ?>/css/main.css">
        <script src="<?php echo \GLOBALVAR\ROOT; ?>/js/jQuery_UI/jquery-1.10.1.js"></script>

        <?php $view->render_webHead(); ?>

    </head>

    <body>  

        <div id="global_wrap">      

            <div id="head_wrap">

                <?php $view->render_header(); ?>

                <div id="navi">
                    <?php $view->render_navi(); ?>
                </div>
            </div>
            <div id="wrapper">

                <div id="main">

                    <div class="alertMsg">
                        <?php $view->model->get_msg(); ?>
                    </div>
                    
                    <?php $view->render_page(); ?>

                </div>

            </div>

            <div id="foot">
                <?php $view->render_foot(); ?>
            </div> 

        </div>  
    </body>

</html>