<?php

namespace GLOBALVAR;

$project = 'dev_final_radflow';
$base = "C:/mapserv/ms4w/Apache/htdocs/";

// systemove promenne
define(__NAMESPACE__ ."\ROOT","http://localhost:8081/".$project."/public");

define(__NAMESPACE__ .'\BASE_PATH', $base.$project);
define(__NAMESPACE__ .'\SETTING_PATH', $base.$project."/setting");
define(__NAMESPACE__ .'\LIB_PATH', $base.$project."/libs");

define(__NAMESPACE__ .'\ERROR_PATH', $base.$project."/setting/log_error.txt");
define(__NAMESPACE__ .'\APP_PATH', $base.$project."/core");
define(__NAMESPACE__ .'\USERLOGFILE_PATH', $base.$project."/setting/user_accounts.txt");
define(__NAMESPACE__ .'\USERDEPO_PATH', $base.$project."/depot");

define(__NAMESPACE__ .'\CONTROLLERS_PATH', $base.$project."/core/controllers");
define(__NAMESPACE__ .'\MODELS_PATH', $base.$project."/core/models");
define(__NAMESPACE__ .'\VIEWS_PATH', $base.$project."/core/views");

?>
