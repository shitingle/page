<?php 
require_once 'main/libs/Smarty.class.php';
define("roat","main/");
$smarty=new Smarty();
$smarty->template_dir=roat."templates";
$smarty->compile_dir=roat."templates_c";
	?>