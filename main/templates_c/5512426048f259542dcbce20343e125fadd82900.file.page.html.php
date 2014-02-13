<?php /* Smarty version Smarty-3.1.16, created on 2014-02-13 05:04:24
         compiled from "main\templates\page.html" */ ?>
<?php /*%%SmartyHeaderCode:2327452faf527047331-35495914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5512426048f259542dcbce20343e125fadd82900' => 
    array (
      0 => 'main\\templates\\page.html',
      1 => 1392267863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327452faf527047331-35495914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52faf527565876_31685455',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52faf527565876_31685455')) {function content_52faf527565876_31685455($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="/page/page.js"></script>
</head>
<body>
<div id="page_count">123</div>
<div>
页数：<label id="page_f">1</label>/<label id="page_t"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</label>&nbsp&nbsp&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(0)">首页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(-1)">
上一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(1)">
下一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax('<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
')">
尾页</a></div>
<script>window.onload=ajax(0)</script>
</body>
</html><?php }} ?>
