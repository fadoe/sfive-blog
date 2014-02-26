<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-26 13:56:28
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1614047123530de47c66efd2-91403494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3f8e0dcdee03df9721510481d2e93059da3b9c' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/sidebar.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1614047123530de47c66efd2-91403494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_raw_mode' => 0,
    'pluginside' => 0,
    'plugindata' => 0,
    'item' => 0,
    'template_option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_530de47c6dd3f4_88907016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530de47c6dd3f4_88907016')) {function content_530de47c6dd3f4_88907016($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_raw_mode']->value) {?>
<div id="serendipity<?php echo $_smarty_tpl->tpl_vars['pluginside']->value;?>
SideBar">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugindata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
   <?php if ($_smarty_tpl->tpl_vars['item']->value['class']=="serendipity_quicksearch_plugin"&&$_smarty_tpl->tpl_vars['template_option']->value['sitenav_quicksearch']=='true'&&($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='above'||$_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='below')) {?>
<!-- do nothing thereby supressing quicksearch in the sidebar when enabled in  -->
<!-- navigation menu bar and ONLY when navigation bar is above or below header -->
   <?php } else { ?>
      <div class="serendipitySideBarItem container_<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
">
         <?php if ($_smarty_tpl->tpl_vars['item']->value['title']!='') {?>
            <h3 class="serendipitySideBarTitle <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
         <?php } else { ?>
            <div class="serendipitySideBarTitleEmpty"></div>
         <?php }?>
         <div class="serendipitySideBarContent"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
         <div class="serendipitySideBarFooter"></div>
      </div>
   <?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['is_raw_mode']->value) {?>
</div>
<?php }?>
<?php }} ?>
