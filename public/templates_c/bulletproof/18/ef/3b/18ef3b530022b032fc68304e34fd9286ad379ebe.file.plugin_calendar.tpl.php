<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-26 12:07:12
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/plugin_calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557299360530dcae0458973-05450939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ef3b530022b032fc68304e34fd9286ad379ebe' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/plugin_calendar.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557299360530dcae0458973-05450939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_calendar_head' => 0,
    'template_option' => 0,
    'serendipityHTTPPath' => 0,
    'template' => 0,
    'plugin_calendar_dow' => 0,
    'dow' => 0,
    'plugin_calendar_weeks' => 0,
    'week' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_530dcae05086d0_00639787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530dcae05086d0_00639787')) {function content_530dcae05086d0_00639787($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/data/falk/Projects/sfive-blog/vendor/smarty/smarty/distribution/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_cycle')) include '/data/falk/Projects/sfive-blog/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
?><table cellspacing="0" cellpadding="0" summary="this table is a calendar for the month of <?php echo serendipity_smarty_formatTime(time(),"%B, %Y");?>
" class="serendipity_calendar">
    <thead>
      <tr>
        <th id="back" scope="col" colspan="1" class="serendipity_calendarHeader" style="text-align: right">
        <?php if ($_smarty_tpl->tpl_vars['plugin_calendar_head']->value['minScroll']<=$_smarty_tpl->tpl_vars['plugin_calendar_head']->value['month_date']) {?>
           <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
           <a title="<?php echo @constant('BACK');?>
" href="<?php echo $_smarty_tpl->tpl_vars['plugin_calendar_head']->value['uri_previous'];?>
"><img alt="<?php echo @constant('BACK');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/back.png"),$_smarty_tpl);?>
" width="12" height="12" /></a>
           <?php } else { ?>
           <a title="<?php echo @constant('BACK');?>
" href="<?php echo $_smarty_tpl->tpl_vars['plugin_calendar_head']->value['uri_previous'];?>
"><img alt="<?php echo @constant('BACK');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_back.png" /></a>
           <?php }?>
        <?php } else { ?>
           <img alt="" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/blank.png"),$_smarty_tpl);?>
" width="6" height="6" class="serendipity_calender_spacer" />
        <?php }?>
        </th>

        <th id="month" scope="col" colspan="5" class="serendipity_calendarHeader" style="text-align: center">
            <b><a style="white-space: nowrap" href="<?php echo $_smarty_tpl->tpl_vars['plugin_calendar_head']->value['uri_month'];?>
"><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['plugin_calendar_head']->value['month_date'],"%B '%y",false);?>
</a></b>
        </th>

        <th id="forward" scope="col" colspan="1" class="serendipity_calendarHeader" style="text-align: left">
        <?php if ($_smarty_tpl->tpl_vars['plugin_calendar_head']->value['maxScroll']>=$_smarty_tpl->tpl_vars['plugin_calendar_head']->value['month_date']) {?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
            <a title="<?php echo @constant('FORWARD');?>
" href="<?php echo $_smarty_tpl->tpl_vars['plugin_calendar_head']->value['uri_next'];?>
"><img alt="<?php echo @constant('FORWARD');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/forward.png"),$_smarty_tpl);?>
" width="12" height="12" /></a>
            <?php } else { ?>
            <a title="<?php echo @constant('FORWARD');?>
" href="<?php echo $_smarty_tpl->tpl_vars['plugin_calendar_head']->value['uri_next'];?>
"><img alt="<?php echo @constant('FORWARD');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_forward.png" /></a>
            <?php }?>
        <?php } else { ?>
            <img alt="" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/blank.png"),$_smarty_tpl);?>
" width="6" height="6" class="serendipity_calender_spacer" />
        <?php }?>
        </th>
    </tr>

    <tr>
    <?php  $_smarty_tpl->tpl_vars["dow"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["dow"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_calendar_dow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["dow"]->key => $_smarty_tpl->tpl_vars["dow"]->value) {
$_smarty_tpl->tpl_vars["dow"]->_loop = true;
?>
        <th id="<?php echo smarty_modifier_truncate(serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dow']->value['date'],"%a",false),3,'',true);?>
" scope="col" abbr="<?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dow']->value['date'],"%A",false);?>
" title="<?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dow']->value['date'],"%A",false);?>
" class="serendipity_weekDayName" align="center"><?php echo smarty_modifier_truncate(serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dow']->value['date'],"%a",false),2,'',true);?>
</th>
    <?php } ?>
    </tr>
</thead>
<tfoot class="serendipity_calendarHeader">
<tr><td id="today" scope="col" colspan="7"><?php echo serendipity_smarty_formatTime(time(),$_smarty_tpl->tpl_vars['template_option']->value['date_format']);?>
</td></tr>
</tfoot>
<tbody>
    <?php  $_smarty_tpl->tpl_vars["week"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["week"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_calendar_weeks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["week"]->key => $_smarty_tpl->tpl_vars["week"]->value) {
$_smarty_tpl->tpl_vars["week"]->_loop = true;
?>
        <tr class="serendipity_calendar <?php echo smarty_function_cycle(array('values'=>"row1, row2, row3, row4, row5, row6"),$_smarty_tpl);?>
">
        <?php  $_smarty_tpl->tpl_vars["day"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["day"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['week']->value['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["day"]->key => $_smarty_tpl->tpl_vars["day"]->value) {
$_smarty_tpl->tpl_vars["day"]->_loop = true;
?>
            <td class="serendipity_calendarDay <?php echo $_smarty_tpl->tpl_vars['day']->value['classes'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['day']->value['properties']['Title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['day']->value['properties']['Title'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['day']->value['properties']['Active'])&&$_smarty_tpl->tpl_vars['day']->value['properties']['Active']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['day']->value['properties']['Link'];?>
"><?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['day']->value['name'])===null||$tmp==='' ? "&#160;" : $tmp);?>
<?php if (isset($_smarty_tpl->tpl_vars['day']->value['properties']['Active'])&&$_smarty_tpl->tpl_vars['day']->value['properties']['Active']) {?></a><?php }?></td>
        <?php } ?>
        </tr>
    <?php } ?>
</tbody>
</table>
<?php }} ?>
