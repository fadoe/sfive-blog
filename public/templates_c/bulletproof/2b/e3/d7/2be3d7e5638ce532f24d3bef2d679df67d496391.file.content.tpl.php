<?php /* Smarty version Smarty-3.1-DEV, created on 2014-03-21 20:22:37
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877727292532c917d932563-74890915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be3d7e5638ce532f24d3bef2d679df67d496391' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/content.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877727292532c917d932563-74890915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchresult_tooShort' => 0,
    'content_message' => 0,
    'searchresult_error' => 0,
    'searchresult_noEntries' => 0,
    'searchresult_results' => 0,
    'subscribe_confirm_error' => 0,
    'subscribe_confirm_success' => 0,
    'ENTRIES' => 0,
    'ARCHIVES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_532c917d97d3e5_46188645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c917d97d3e5_46188645')) {function content_532c917d97d3e5_46188645($_smarty_tpl) {?><!-- CONTENT START -->
<?php if ($_smarty_tpl->tpl_vars['searchresult_tooShort']->value) {?>
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date"><?php echo @constant('QUICKSEARCH');?>
</h3>
      <div class="serendipity_search serendipity_search_tooshort"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
   </div>
<?php } elseif ($_smarty_tpl->tpl_vars['searchresult_error']->value) {?>
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date"><?php echo @constant('QUICKSEARCH');?>
</h3>
      <div class="serendipity_search serendipity_search_error"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
   </div>
<?php } elseif ($_smarty_tpl->tpl_vars['searchresult_noEntries']->value) {?>
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date"><?php echo @constant('QUICKSEARCH');?>
</h3>
      <div class="serendipity_search serendipity_search_noentries"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
   </div>
<?php } elseif ($_smarty_tpl->tpl_vars['searchresult_results']->value) {?>
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date"><?php echo @constant('QUICKSEARCH');?>
</h3>
      <div class="serendipity_search serendipity_search_results"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
   </div>
<?php } elseif ($_smarty_tpl->tpl_vars['subscribe_confirm_error']->value) {?>
    <div class="serendipity_Entry_Date">
        <h3 class="serendipity_date"><?php echo @constant('ERROR');?>
</h3>
        <div class="serendipity_msg_important comment_subscribe_error"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['subscribe_confirm_success']->value) {?>
    <div class="serendipity_Entry_Date">
        <h3 class="serendipity_date"><?php echo @constant('SUCCESS');?>
</h3>
        <div class="serendipity_msg_notice comment_subscribe_success"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
    </div>
<?php } else { ?>
   <div class="serendipity_content_message"><?php echo $_smarty_tpl->tpl_vars['content_message']->value;?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['ENTRIES']->value;?>

<?php echo $_smarty_tpl->tpl_vars['ARCHIVES']->value;?>

<!-- CONTENT END -->
<?php }} ?>
