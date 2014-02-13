<?php
require_once 'system.smarty.inc.php';
require_once 'conn.php';
header("Content-Type:text/html;charset=utf-8");
$page=$_GET['page'];
if(isset($page)&&$page==""){
	$page=1;
}
echo $page;
$sql="select * from tb_member";
$result=$conne->numRst($sql);
$page_count=$result;
$count=round($page_count/3);
$smarty->assign("page_count",$page_count);
$page_size=3;
$page_for=($page-1)*$page_size;
$page_next=($page)*$page_size;
echo $page_for;
echo $page_next;
$sql="select * from tb_member limit {$page_for},{$page_next}";
$row=$conne->getRowsArray($sql);
echo " <table border='1'>
      <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      </tr>";
for($i=0;$i<3;$i++){
	echo  "<tr>
	<td>{$row[$i]['name']}</td>
	<td>{$row[$i]['email']}</td>
	</tr>";}
	echo "</table>";
?>