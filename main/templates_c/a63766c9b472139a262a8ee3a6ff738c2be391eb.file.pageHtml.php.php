<?php /* Smarty version Smarty-3.1.16, created on 2014-02-12 07:40:22
         compiled from "main\templates\pageHtml.php" */ ?>
<?php /*%%SmartyHeaderCode:64052fb2566d2b3e7-51802486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a63766c9b472139a262a8ee3a6ff738c2be391eb' => 
    array (
      0 => 'main\\templates\\pageHtml.php',
      1 => 1392180956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64052fb2566d2b3e7-51802486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_count' => 0,
    'hello' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fb2566e35439_63172176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb2566e35439_63172176')) {function content_52fb2566e35439_63172176($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div id="page_count"><?php echo $_smarty_tpl->tpl_vars['page_count']->value;?>
</div>
<div>页数：<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
&nbsp&nbsp&nbsp&nbsp<a onclick="ajax("http://localhost/page/page.php?page="+<?php echo $_smarty_tpl->tpl_vars['hello']->value-1;?>
)">上一页</a>&nbsp&nbsp<a onclick="ajax(http://localhost/page/page.php)">下一页</a>&nbsp&nbsp<a href="" onclick="ajax("http://localhost/page/page.php?page="+{})">尾页</a></div>
</body>
</html><?php }} ?>
