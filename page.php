<?php
require_once 'system.smarty.inc.php';
require_once 'conn.php';
header("Content-Type:text/html;charset=utf-8");
$sql="select * from tb_member";
$result=$conne->numRst($sql);
$page_count=$result;
$count=round($page_count/3);
echo $page_count;
$smarty->assign("count",$count);
$smarty->assign("hello","$page_count");
$smarty->display("page.html");
?>