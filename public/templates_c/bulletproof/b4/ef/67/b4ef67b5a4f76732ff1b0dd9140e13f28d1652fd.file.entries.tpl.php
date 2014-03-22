<?php /* Smarty version Smarty-3.1-DEV, created on 2014-03-22 18:16:03
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/entries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:808232849532dc5531a2636-58888929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ef67b5a4f76732ff1b0dd9140e13f28d1652fd' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/entries.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808232849532dc5531a2636-58888929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entries' => 0,
    'dategroup' => 0,
    'template_option' => 0,
    'entry' => 0,
    'entry_category' => 0,
    'use_popups' => 0,
    'is_preview' => 0,
    'is_single_entry' => 0,
    'shorttitle' => 0,
    'comments_messagestack' => 0,
    'message' => 0,
    'is_comment_added' => 0,
    'is_comment_moderate' => 0,
    'COMMENTFORM' => 0,
    'plugin_clean_page' => 0,
    'footer_prev_page' => 0,
    'serendipityHTTPPath' => 0,
    'template' => 0,
    'footer_info' => 0,
    'footer_next_page' => 0,
    'footer_totalPages' => 0,
    'footer_currentPage' => 0,
    'paginationStartPage' => 0,
    'footer_pageLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_532dc553618c55_41554850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532dc553618c55_41554850')) {function content_532dc553618c55_41554850($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/data/falk/Projects/sfive-blog/src/vendor/smarty/smarty/distribution/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/data/falk/Projects/sfive-blog/src/vendor/smarty/smarty/distribution/libs/plugins/modifier.replace.php';
?><!-- ENTRIES START -->
<?php echo serendipity_smarty_hookPlugin(array('hook'=>"entries_header",'addData'=>((string)$_smarty_tpl->tpl_vars['entry_id']->value)),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars["dategroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["dategroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["dategroup"]->key => $_smarty_tpl->tpl_vars["dategroup"]->value) {
$_smarty_tpl->tpl_vars["dategroup"]->_loop = true;
?>
<div class="hentry serendipity_Entry_Date<?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?> serendipity_Sticky_Entry<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?>
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['show_sticky_entry_heading']=='true') {?>
            <h3 class="serendipity_date"><?php echo @constant('STICKY_POSTINGS');?>
</h3>
        <?php }?>
    <?php } else { ?>
        <h3 class="serendipity_date"><abbr class="published" title="<?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dategroup']->value['date'],'%Y-%m-%dT%H:%M:%S%Z');?>
"><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['dategroup']->value['date'],$_smarty_tpl->tpl_vars['template_option']->value['date_format']);?>
</abbr></h3>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars["entry"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dategroup']->value['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entry"]->key => $_smarty_tpl->tpl_vars["entry"]->value) {
$_smarty_tpl->tpl_vars["entry"]->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["entry"] = new Smarty_variable($_smarty_tpl->tpl_vars['entry']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["entry"] = clone $_smarty_tpl->tpl_vars["entry"];?>
        <h4 class="entry-title serendipity_title"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a></h4>

        <div class="serendipity_entry serendipity_entry_author_<?php echo serendipity_makeFilename($_smarty_tpl->tpl_vars['entry']->value['author']);?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_entry_owner']) {?>serendipity_entry_author_self<?php }?>">

            <?php if ((!$_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']||($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']&&$_smarty_tpl->tpl_vars['template_option']->value['show_sticky_entry_footer']=='true'))) {?>
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['entryfooterpos']=='belowtitle') {?>
                    <div class='serendipity_entryFooter belowtitle'>
                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footerauthor']=='true') {?>
                            <?php echo @constant('POSTED_BY');?>
 <address class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_author'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['author'];?>
</a></address>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercategories']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['categories']) {?>
                                <?php echo @constant('IN');?>
 <?php  $_smarty_tpl->tpl_vars["entry_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["entry_category"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["entry_category"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["entry_category"]->key => $_smarty_tpl->tpl_vars["entry_category"]->value) {
$_smarty_tpl->tpl_vars["entry_category"]->_loop = true;
 $_smarty_tpl->tpl_vars["entry_category"]->iteration++;
 $_smarty_tpl->tpl_vars["entry_category"]->last = $_smarty_tpl->tpl_vars["entry_category"]->iteration === $_smarty_tpl->tpl_vars["entry_category"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['last'] = $_smarty_tpl->tpl_vars["entry_category"]->last;
?><a href="<?php echo $_smarty_tpl->tpl_vars['entry_category']->value['category_link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry_category']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']) {?>, <?php }?><?php } ?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertimestamp']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?>
                                <?php echo @constant('ON');?>

                            <?php } else { ?>
                                <?php echo @constant('AT');?>

                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],$_smarty_tpl->tpl_vars['template_option']->value['date_format']);?>
 <?php }?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],'%H:%M');?>
</a>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercomments']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_comments']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertrackbacks']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_trackbacks']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_entry_owner']&&!$_smarty_tpl->tpl_vars['is_preview']->value) {?>
                        <div class="editentrylink"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_edit'];?>
"><?php echo @constant('EDIT_ENTRY');?>
</a></div>
                        <?php }?>

                        <?php echo $_smarty_tpl->tpl_vars['entry']->value['add_footer'];?>


                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['addthiswidget']=='true') {?>
                            <div class="addthiswidget">
                                <script type="text/javascript">
                                    addthis_url = '<?php echo rawurlencode($_smarty_tpl->tpl_vars['entry']->value['rdf_ident']);?>
';
                                    addthis_title = '<?php echo rawurlencode($_smarty_tpl->tpl_vars['entry']->value['title']);?>
';
                                    addthis_pub = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['addthisaccount'], ENT_QUOTES, 'UTF-8', true);?>
';
                                </script>
                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                            </div>
                        <?php }?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['entryfooterpos']=='splitfoot') {?>
                  <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footerauthor']=='false'&&$_smarty_tpl->tpl_vars['template_option']->value['footercategories']=='false'&&$_smarty_tpl->tpl_vars['template_option']->value['footertimestamp']=='false') {?>
                  <?php } else { ?>
                    <div class='serendipity_entryFooter byline'>
                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footerauthor']=='true') {?>
                            <?php echo @constant('POSTED_BY');?>
 <address class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_author'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['author'];?>
</a></address>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercategories']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['categories']) {?>
                                <?php echo @constant('IN');?>
 <?php  $_smarty_tpl->tpl_vars["entry_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["entry_category"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["entry_category"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["entry_category"]->key => $_smarty_tpl->tpl_vars["entry_category"]->value) {
$_smarty_tpl->tpl_vars["entry_category"]->_loop = true;
 $_smarty_tpl->tpl_vars["entry_category"]->iteration++;
 $_smarty_tpl->tpl_vars["entry_category"]->last = $_smarty_tpl->tpl_vars["entry_category"]->iteration === $_smarty_tpl->tpl_vars["entry_category"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['last'] = $_smarty_tpl->tpl_vars["entry_category"]->last;
?><a href="<?php echo $_smarty_tpl->tpl_vars['entry_category']->value['category_link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry_category']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']) {?>, <?php }?><?php } ?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertimestamp']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?>
                                <?php echo @constant('ON');?>

                            <?php } else { ?>
                                <?php echo @constant('AT');?>

                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],$_smarty_tpl->tpl_vars['template_option']->value['date_format']);?>
 <?php }?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],'%H:%M');?>
</a>
                        <?php }?>
                    </div>
                  <?php }?>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['entry']->value['categories']) {?>
                <span class="serendipity_entryIcon">
                    <?php  $_smarty_tpl->tpl_vars["entry_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entry_category"]->key => $_smarty_tpl->tpl_vars["entry_category"]->value) {
$_smarty_tpl->tpl_vars["entry_category"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['entry_category']->value['category_icon']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['entry_category']->value['category_link'];?>
"><img class="serendipity_entryIcon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry_category']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo serendipity_emptyPrefix($_smarty_tpl->tpl_vars['entry_category']->value['category_description']);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry_category']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['entry_category']->value['category_icon'];?>
" /></a>
                        <?php }?>
                    <?php } ?>
               </span>
            <?php }?>
  
            <div class="entry-content serendipity_entry_body">
                <?php echo $_smarty_tpl->tpl_vars['entry']->value['body'];?>

                <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_extended']&&!$_smarty_tpl->tpl_vars['is_single_entry']->value&&!$_smarty_tpl->tpl_vars['entry']->value['is_extended']) {?>
                    <?php $_smarty_tpl->tpl_vars["shorttitle"] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value['title'],50,'...'), null, 0);?>
                    <span class="continue_reading"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#extended" title='<?php echo sprintf(@constant('VIEW_EXTENDED_ENTRY'),$_smarty_tpl->tpl_vars['shorttitle']->value);?>
'><?php echo sprintf(@constant('VIEW_EXTENDED_ENTRY'),$_smarty_tpl->tpl_vars['shorttitle']->value);?>
 &#187;</a></span>
                <?php }?>
           </div>

            <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_extended']) {?>
                <div class="serendipity_entry_extended"><a id="extended"></a><?php echo $_smarty_tpl->tpl_vars['entry']->value['extended'];?>
</div>
            <?php }?>

            <?php if ((!$_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']||($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']&&$_smarty_tpl->tpl_vars['template_option']->value['show_sticky_entry_footer']=='true'))) {?>
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['entryfooterpos']=='belowentry') {?>
                    <div class='serendipity_entryFooter belowentry'>
                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footerauthor']=='true') {?>
                            <?php echo @constant('POSTED_BY');?>
 <address class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_author'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['author'];?>
</a></address>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercategories']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['categories']) {?>
                                <?php echo @constant('IN');?>
 <?php  $_smarty_tpl->tpl_vars["entry_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["entry_category"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["entry_category"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["entry_category"]->key => $_smarty_tpl->tpl_vars["entry_category"]->value) {
$_smarty_tpl->tpl_vars["entry_category"]->_loop = true;
 $_smarty_tpl->tpl_vars["entry_category"]->iteration++;
 $_smarty_tpl->tpl_vars["entry_category"]->last = $_smarty_tpl->tpl_vars["entry_category"]->iteration === $_smarty_tpl->tpl_vars["entry_category"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['last'] = $_smarty_tpl->tpl_vars["entry_category"]->last;
?><a href="<?php echo $_smarty_tpl->tpl_vars['entry_category']->value['category_link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry_category']->value['category_name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['last']) {?>, <?php }?><?php } ?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertimestamp']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?>
                                <?php echo @constant('ON');?>

                            <?php } else { ?>
                                <?php echo @constant('AT');?>

                            <?php }?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['dategroup']->value['is_sticky']) {?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],$_smarty_tpl->tpl_vars['template_option']->value['date_format']);?>
 <?php }?><?php echo serendipity_smarty_formatTime($_smarty_tpl->tpl_vars['entry']->value['timestamp'],'%H:%M');?>
</a>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercomments']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_comments']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertrackbacks']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_trackbacks']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_entry_owner']&&!$_smarty_tpl->tpl_vars['is_preview']->value) {?>
                            <div class="editentrylink"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_edit'];?>
"><?php echo @constant('EDIT_ENTRY');?>
</a></div>
                        <?php }?>

                        <?php echo $_smarty_tpl->tpl_vars['entry']->value['add_footer'];?>


                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['addthiswidget']=='true') {?>
                            <div class="addthiswidget">
                                <a href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', encodeURIComponent('<?php echo $_smarty_tpl->tpl_vars['entry']->value['rdf_ident'];?>
'), encodeURIComponent('<?php echo rawurlencode($_smarty_tpl->tpl_vars['entry']->value['title']);?>
'));" onmouseout="addthis_close()" onclick="return addthis_sendto()" title="Bookmark and Share" target="_blank"><img src="http://s7.addthis.com/static/btn/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0" /></a>
                                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['addthisaccount'], ENT_QUOTES, 'UTF-8', true);?>
"></script>
                            </div>
                        <?php }?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['entryfooterpos']=='splitfoot') {?>
                    <div class='serendipity_entryFooter infofooter'>
                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footercomments']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_comments']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_comments'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php if ($_smarty_tpl->tpl_vars['entry']->value['comments']==0) {?><?php echo @constant('NO_COMMENTS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#comments"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['comments'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footertrackbacks']=='true') {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_trackbacks']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_popups']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_popup_trackbacks'];?>
" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['altcommtrack']=='true') {?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php if ($_smarty_tpl->tpl_vars['entry']->value['trackbacks']==0) {?><?php echo @constant('NO_TRACKBACKS');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
<?php }?></a>
                                    <?php } else { ?>
                                        | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link'];?>
#trackbacks"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label_trackbacks'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['trackbacks'];?>
)</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_entry_owner']&&!$_smarty_tpl->tpl_vars['is_preview']->value) {?>
                            <div class="editentrylink"><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_edit'];?>
"><?php echo @constant('EDIT_ENTRY');?>
</a></div>
                        <?php }?>

                        <?php echo $_smarty_tpl->tpl_vars['entry']->value['add_footer'];?>


                        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['addthiswidget']=='true') {?>
                            <div class="addthiswidget">
                                <script type="text/javascript">
                                    addthis_url = '<?php echo rawurlencode($_smarty_tpl->tpl_vars['entry']->value['rdf_ident']);?>
';
                                    addthis_title = '<?php echo rawurlencode($_smarty_tpl->tpl_vars['entry']->value['title']);?>
';
                                    addthis_pub = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['addthisaccount'], ENT_QUOTES, 'UTF-8', true);?>
';
                                </script>
                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                            </div>
                        <?php }?>

                    </div>
                <?php }?>
            <?php }?>
        </div>

        <!--
        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                 xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
                 xmlns:dc="http://purl.org/dc/elements/1.1/">
        <rdf:Description
                 rdf:about="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_rdf'];?>
"
                 trackback:ping="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_trackback'];?>
"
                 dc:title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['title_rdf'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['entry']->value['title'] : $tmp);?>
"
                 dc:identifier="<?php echo $_smarty_tpl->tpl_vars['entry']->value['rdf_ident'];?>
" />
        </rdf:RDF>
        -->
        <?php echo $_smarty_tpl->tpl_vars['entry']->value['plugin_display_dat'];?>


        <?php if ($_smarty_tpl->tpl_vars['is_single_entry']->value&&!$_smarty_tpl->tpl_vars['use_popups']->value&&!$_smarty_tpl->tpl_vars['is_preview']->value) {?>
            <?php if (@constant('DATA_UNSUBSCRIBED')) {?>
                <div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@constant('DATA_UNSUBSCRIBED'),@constant('UNSUBSCRIBE_OK'));?>
</div>
            <?php }?>

            <?php if (@constant('DATA_TRACKBACK_DELETED')) {?>
                <div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@constant('DATA_TRACKBACK_DELETED'),@constant('TRACKBACK_DELETED'));?>
</div>
            <?php }?>

            <?php if (@constant('DATA_TRACKBACK_APPROVED')) {?>
                <div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@constant('DATA_TRACKBACK_APPROVED'),@constant('TRACKBACK_APPROVED'));?>
</div>
            <?php }?>

            <?php if (@constant('DATA_COMMENT_DELETED')) {?>
                <div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@constant('DATA_COMMENT_DELETED'),@constant('COMMENT_DELETED'));?>
</div>
            <?php }?>

            <?php if (@constant('DATA_COMMENT_APPROVED')) {?>
                <div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@constant('DATA_COMMENT_APPROVED'),@constant('COMMENT_APPROVED'));?>
</div>
            <?php }?>

            <div class="serendipity_comments serendipity_section_trackbacks">
                <a id="trackbacks"></a>
                <div class="serendipity_commentsTitle"><?php echo @constant('TRACKBACKS');?>
</div>
                <div class="serendipity_center">
                    <a rel="nofollow" style="font-weight: normal" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_trackback'];?>
" onclick="alert('<?php echo htmlspecialchars(@constant('TRACKBACK_SPECIFIC_ON_CLICK'), ENT_QUOTES, 'UTF-8', true);?>
'); return false;" title="<?php echo htmlspecialchars(@constant('TRACKBACK_SPECIFIC_ON_CLICK'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo @constant('TRACKBACK_SPECIFIC');?>
</a>
                </div>
                <div id="serendipity_trackbacklist"><?php echo serendipity_smarty_printTrackbacks(array('entry'=>$_smarty_tpl->tpl_vars['entry']->value['id']),$_smarty_tpl);?>
</div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_single_entry']->value&&!$_smarty_tpl->tpl_vars['is_preview']->value) {?>
            <div class="serendipity_comments serendipity_section_comments">
                <a id="comments"></a>
                <div class="serendipity_commentsTitle"><?php echo @constant('COMMENTS');?>
</div>
                <div class="serendipity_center"><?php echo @constant('DISPLAY_COMMENTS_AS');?>

                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['viewmode']==@constant('VIEWMODE_LINEAR')) {?>
                        (<?php echo @constant('COMMENTS_VIEWMODE_LINEAR');?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_viewmode_threaded'];?>
#comments" rel="nofollow"><?php echo @constant('COMMENTS_VIEWMODE_THREADED');?>
</a>)
                    <?php } else { ?>
                        (<a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_viewmode_linear'];?>
#comments"><?php echo @constant('COMMENTS_VIEWMODE_LINEAR');?>
</a> | <?php echo @constant('COMMENTS_VIEWMODE_THREADED');?>
)
                    <?php }?>
                </div>
                <div id="serendipity_commentlist"><?php echo serendipity_smarty_printComments(array('entry'=>$_smarty_tpl->tpl_vars['entry']->value['id'],'mode'=>$_smarty_tpl->tpl_vars['entry']->value['viewmode']),$_smarty_tpl);?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_entry_owner']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['allow_comments']) {?>
                        <div class="serendipity_center">(<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_deny_comments'];?>
"><?php echo @constant('COMMENTS_DISABLE');?>
</a>)</div>
                    <?php } else { ?>
                        <div class="serendipity_center">(<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['link_allow_comments'];?>
"><?php echo @constant('COMMENTS_ENABLE');?>
</a>)</div>
                    <?php }?>
                <?php }?>
                <a id="feedback"></a>

                <?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments_messagestack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
?>
                    <div class="serendipity_center serendipity_msg_important"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
                <?php } ?>

                <?php if ($_smarty_tpl->tpl_vars['is_comment_added']->value) {?>
                    <div class="serendipity_center serendipity_msg_notice"><?php echo @constant('COMMENT_ADDED');?>
</div>
                <?php } elseif ($_smarty_tpl->tpl_vars['is_comment_moderate']->value) {?>
                    <div class="serendipity_center serendipity_msg_notice"><?php echo @constant('COMMENT_ADDED');?>
<br /><?php echo @constant('THIS_COMMENT_NEEDS_REVIEW');?>
</div>
                <?php } elseif (!$_smarty_tpl->tpl_vars['entry']->value['allow_comments']) {?>
                    <div class="serendipity_center serendipity_msg_important"><?php echo @constant('COMMENTS_CLOSED');?>
</div>
                <?php } else { ?>
                   <div class="serendipity_section_commentform">
                       <div class="serendipity_commentsTitle"><?php echo @constant('ADD_COMMENT');?>
</div>
                       <?php echo $_smarty_tpl->tpl_vars['COMMENTFORM']->value;?>

                   </div>
                <?php }?>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['entry']->value['backend_preview'];?>

    <?php } ?>
</div>

<?php }
if (!$_smarty_tpl->tpl_vars["dategroup"]->_loop) {
?>
    <?php if (!$_smarty_tpl->tpl_vars['plugin_clean_page']->value) {?>
        <div class="serendipity_overview_noentries">
            <?php echo @constant('NO_ENTRIES_TO_PRINT');?>

        </div>
    <?php }?>
<?php } ?>

<div class='serendipity_pageFooter' style="text-align: center">
    <?php if ($_smarty_tpl->tpl_vars['footer_prev_page']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='texticon') {?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
                <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
"><img alt="<?php echo @constant('PREVIOUS_PAGE');?>
" title="<?php echo @constant('PREVIOUS_PAGE');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/back.png"),$_smarty_tpl);?>
" /><?php echo @constant('PREVIOUS_PAGE');?>
</a>
            <?php } else { ?>
                <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
"><img alt="<?php echo @constant('PREVIOUS_PAGE');?>
" title="<?php echo @constant('PREVIOUS_PAGE');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_back.png" /><?php echo @constant('PREVIOUS_PAGE');?>
</a>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='icon') {?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
                <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
"><img alt="<?php echo @constant('PREVIOUS_PAGE');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/back.png"),$_smarty_tpl);?>
" /><?php echo @constant('PREVIOUS_PAGE');?>
</a>
            <?php } else { ?>
                <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
"><img alt="<?php echo @constant('PREVIOUS_PAGE');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_back.png" /></a>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='text') {?>
            <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
">&#171; <?php echo @constant('PREVIOUS_PAGE');?>
</a>&#160;&#160;
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['footer_info']->value) {?>
        (<?php echo $_smarty_tpl->tpl_vars['footer_info']->value;?>
)
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['footer_next_page']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='texticon') {?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
                <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><?php echo @constant('NEXT_PAGE');?>
<img alt="<?php echo @constant('NEXT_PAGE');?>
" title="<?php echo @constant('NEXT_PAGE');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/forward.png"),$_smarty_tpl);?>
" /></a>
            <?php } else { ?>
                <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><?php echo @constant('NEXT_PAGE');?>
<img alt="<?php echo @constant('NEXT_PAGE');?>
" title="<?php echo @constant('NEXT_PAGE');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_forward.png" /></a>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='icon') {?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']=='blank') {?>
                <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><img alt="<?php echo @constant('NEXT_PAGE');?>
" src="<?php echo serendipity_smarty_getFile(array('file'=>"img/forward.png"),$_smarty_tpl);?>
" /></a>
            <?php } else { ?>
                <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><img alt="<?php echo @constant('NEXT_PAGE');?>
" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_forward.png" /></a>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['prev_next_style']=='text') {?>
             <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><?php echo @constant('NEXT_PAGE');?>
 &#187;</a>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['template_option']->value['show_pagination']=='true'&&$_smarty_tpl->tpl_vars['footer_totalPages']->value>1) {?>
        <div class="pagination">
            <?php $_smarty_tpl->tpl_vars["paginationStartPage"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['footer_currentPage']->value-3), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['footer_currentPage']->value+3>$_smarty_tpl->tpl_vars['footer_totalPages']->value) {?>
                <?php $_smarty_tpl->tpl_vars["paginationStartPage"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['footer_totalPages']->value-6), null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['paginationStartPage']->value<=0) {?>
                <?php $_smarty_tpl->tpl_vars["paginationStartPage"] = new Smarty_variable("1", null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['footer_prev_page']->value) {?>
                <a title="<?php echo @constant('PREVIOUS_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_prev_page']->value;?>
"><span class="pagearrow">&#9668;</span></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['paginationStartPage']->value>1) {?>
                <a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['footer_pageLink']->value,'%s','1');?>
">1</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['paginationStartPage']->value>2) {?>
                &hellip;
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) $_smarty_tpl->tpl_vars['paginationStartPage']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['footer_totalPages']->value+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int) 7;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']!=$_smarty_tpl->tpl_vars['footer_currentPage']->value) {?>
                    <a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['footer_pageLink']->value,'%s',$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</a>
                <?php } else { ?>
                    <span id="thispage"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</span>
                <?php }?>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<$_smarty_tpl->tpl_vars['footer_totalPages']->value) {?>
                &hellip;
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<=$_smarty_tpl->tpl_vars['footer_totalPages']->value) {?>
                <a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['footer_pageLink']->value,'%s',$_smarty_tpl->tpl_vars['footer_totalPages']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['footer_totalPages']->value;?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['footer_next_page']->value) {?>
                <a title="<?php echo @constant('NEXT_PAGE');?>
" href="<?php echo $_smarty_tpl->tpl_vars['footer_next_page']->value;?>
"><span class="pagearrow">&#9658;</span></a>
            <?php }?>
        </div>
    <?php }?>

    <?php echo serendipity_smarty_hookPlugin(array('hook'=>"entries_footer"),$_smarty_tpl);?>

</div>
<!-- ENTRIES END -->
<?php }} ?>
