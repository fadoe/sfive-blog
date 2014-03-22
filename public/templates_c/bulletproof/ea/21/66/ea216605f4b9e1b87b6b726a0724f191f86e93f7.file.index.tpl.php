<?php /* Smarty version Smarty-3.1-DEV, created on 2014-03-22 18:16:03
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89535778532dc5536976e3-59119526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea216605f4b9e1b87b6b726a0724f191f86e93f7' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/bulletproof/index.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89535778532dc5536976e3-59119526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_embedded' => 0,
    'is_xhtml' => 0,
    'lang' => 0,
    'head_title' => 0,
    'blogTitle' => 0,
    'head_subtitle' => 0,
    'head_charset' => 0,
    'head_version' => 0,
    'serendipityBaseURL' => 0,
    'serendipityRewritePrefix' => 0,
    'entry_id' => 0,
    'head_link_stylesheet' => 0,
    'template_option' => 0,
    'serendipityHTTPPath' => 0,
    'template' => 0,
    'random_headerimage' => 0,
    'is_raw_mode' => 0,
    'serendipityArchiveURL' => 0,
    'navlinks' => 0,
    'currpage' => 0,
    'navlink' => 0,
    'currpage2' => 0,
    'serendipityIndexFile' => 0,
    'blogDescription' => 0,
    'leftSidebarElements' => 0,
    'CONTENT' => 0,
    'rightSidebarElements' => 0,
    'raw_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_532dc5539cbef0_84459686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532dc5539cbef0_84459686')) {function content_532dc5539cbef0_84459686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/data/falk/Projects/sfive-blog/src/vendor/smarty/smarty/distribution/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['is_embedded']->value!=true) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_xhtml']->value) {?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <?php } else { ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <?php }?>

    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['head_title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blogTitle']->value : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['head_subtitle']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['head_subtitle']->value;?>
<?php }?></title>
        <?php echo serendipity_smarty_hookPlugin(array('hook'=>"frontend_header"),$_smarty_tpl);?>

        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['head_charset']->value;?>
" />
        <meta name="Powered-By" content="Serendipity v.<?php echo $_smarty_tpl->tpl_vars['head_version']->value;?>
" />
        <link rel="alternate"  type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['blogTitle']->value;?>
 RSS feed" href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['serendipityRewritePrefix']->value;?>
feeds/index.rss2" />
        <link rel="alternate"  type="application/x.atom+xml"  title="<?php echo $_smarty_tpl->tpl_vars['blogTitle']->value;?>
 Atom feed"  href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['serendipityRewritePrefix']->value;?>
feeds/atom.xml" />
        <?php if ($_smarty_tpl->tpl_vars['entry_id']->value) {?><link rel="pingback" href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
comment.php?type=pingback&amp;entry_id=<?php echo $_smarty_tpl->tpl_vars['entry_id']->value;?>
" /><?php }?>
        <!-- uncomment the line below if your site uses a favicon -->
        <!--   <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
favicon.ico" /> -->
        <!-- base styles needed for bulletproof -->
        <link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"base.css"),$_smarty_tpl);?>
" />
        <!-- style.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['head_link_stylesheet']->value;?>
" />
        <!--[if IE 5]>
            <link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"ie5.css"),$_smarty_tpl);?>
" />
        <![endif]-->
        <!--[if IE 6]>
            <link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"ie6.css"),$_smarty_tpl);?>
" />
        <![endif]-->
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"ie7.css"),$_smarty_tpl);?>
" />
        <![endif]-->
        <!-- additional colorset stylesheet -->
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['colorset']) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['template_option']->value['colorset'];?>
_style.css" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['custheader']=='true') {?>
        <style type="text/css">
            #serendipity_banner {
            background-image: url(<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['random_headerimage']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['template_option']->value['headerimage'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
);
            background-position: <?php echo $_smarty_tpl->tpl_vars['template_option']->value['headerposhor'];?>
 <?php echo $_smarty_tpl->tpl_vars['template_option']->value['headerposver'];?>
;
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['headertype']=='banner') {?>
                background-repeat: no-repeat;
            <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['headertype']=='htiled') {?>
                background-repeat: repeat-x;
            <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['headertype']=='vtiled') {?>
                background-repeat: repeat-y;
            <?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['headertype']=='btiled') {?>
                background-repeat: repeat;
            <?php }?>}
        </style>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['jscolumns']=='true') {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/p7_eqCols2_10.js"></script><?php }?>
        <!-- print media stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"print.css"),$_smarty_tpl);?>
" media="print" />
        <!-- additional user stylesheet: this can be used to override selected styles -->
        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['userstylesheet']=='true') {?><link rel="stylesheet" type="text/css" href="<?php echo serendipity_smarty_getFile(array('file'=>"user.css"),$_smarty_tpl);?>
" media="screen" /><?php }?>
    </head>

    <body<?php if ($_smarty_tpl->tpl_vars['template_option']->value['jscolumns']=='true') {?> onload="P7_equalCols2(0,<?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']!='1col') {?>'content','DIV',<?php }?>'serendipityLeftSideBar','DIV','serendipityRightSideBar','DIV')"<?php }?>>
<?php } else { ?>
    <?php echo serendipity_smarty_hookPlugin(array('hook'=>"frontend_header"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_raw_mode']->value!=true) {?>

    <!-- #skiplinks: these are links used to navigate quickly in text-based browsers -->
    <!--             they are of little use in modern graphical browsers, so the are -->
    <!--             hidden using CSS                                                -->
    <div id="skiplinks">
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']!='none') {?><li lang="en"><a href="<?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>#sbsitenav<?php } elseif ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>#sbsitenav<?php } else { ?>#sitenav<?php }?>">Skip to site navigation</a></li><?php }?>
            <li lang="en"><a href="#content">Skip to blog entries</a></li>
            <li lang="en"><a href="<?php echo $_smarty_tpl->tpl_vars['serendipityArchiveURL']->value;?>
">Skip to archive page</a></li>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']!='2bs') {?><li lang="en"><a href="#serendipityLeftSideBar">Skip to left sidebar</a></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']!='2sb') {?><li lang="en"><a href="#serendipityRightSideBar">Skip to right sidebar</a></li><?php }?>
        </ul>
    </div>

    <!-- #wrapper: this wrapper div holds the actual blog content; it can be used to -->
    <!--           give the blog a width in px or % plus an additional max-width in  -->
    <!--           order to limit the width in high resolutions to limit the length  -->
    <!--           of a line                                                         -->
    <div id="wrapper">
        <div id="wrapper_top"></div>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='above') {?>
            <!-- #sitenav: this holds a list of navigational links which can be customized   -->
            <!--           in the theme configurator                                         -->
            <div id="sitenav" class="snabove">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navbar']['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navbar']['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navbar']['first']) {?> navlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navbar']['last']) {?> navlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li>
                    <?php } ?>
                </ul>
                <!-- quicksearch option in the navigational link menu bar only when navbar is    -->
                <!-- above or below the banner                                                   -->
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenav_quicksearch']=='true') {?>
                    <form id="searchform" action="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['serendipityIndexFile']->value;?>
" method="get">
                        <input type="hidden" name="serendipity[action]" value="search" />
                        <input alt="<?php echo @constant('QUICKSEARCH');?>
" type="text" id="serendipityQuickSearchTermField" name="serendipity[searchTerm]" value="<?php echo @constant('QUICKSEARCH');?>
..." onfocus="if(this.value=='<?php echo @constant('QUICKSEARCH');?>
...')value=''" onblur="if(this.value=='')value='<?php echo @constant('QUICKSEARCH');?>
...';" />
                        <div id="LSResult" style="display: none;"><div id="LSShadow"></div></div>
                    </form>
                    <?php echo serendipity_smarty_hookPlugin(array('hook'=>"quicksearch_plugin",'hookAll'=>"true"),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php }?>

        <!-- #serendipity_banner: this is the header area. it holds the blog title and   -->
        <!--                      description headlines                                  -->
        <div id="serendipity_banner">
            <h1><span class="<?php if ($_smarty_tpl->tpl_vars['template_option']->value['firbtitle']=='false') {?>in<?php }?>visible"><a class="homelink1" href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
"><?php echo smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['head_title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blogTitle']->value : $tmp),80," ...");?>
</a></span></h1>
            <h2><span class="<?php if ($_smarty_tpl->tpl_vars['template_option']->value['firbdescr']=='false') {?>in<?php }?>visible"><a class="homelink2" href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['head_subtitle']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['blogDescription']->value : $tmp);?>
</a></span></h2>
        </div>
        <div id="serendipity_below_banner"></div>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='below') {?>
            <!-- #sitenav: this holds a list of navigational links which can be customized   -->
            <!--           in the theme configurator                                         -->
            <div id="sitenav" class="snbelow">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["navbar"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["navbar"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navbar']['first']) {?> navlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navbar']['last']) {?> navlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li>
                    <?php } ?>
                </ul>
                <!-- quicksearch option in the navigational link menu bar only when navbar is    -->
                <!-- above or below the banner                                                   -->
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenav_quicksearch']=='true') {?>
                    <form id="searchform" action="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['serendipityIndexFile']->value;?>
" method="get">
                        <input type="hidden" name="serendipity[action]" value="search" />
                        <input alt="<?php echo @constant('QUICKSEARCH');?>
" type="text" id="serendipityQuickSearchTermField" name="serendipity[searchTerm]" value="<?php echo @constant('QUICKSEARCH');?>
..." onfocus="if(this.value=='<?php echo @constant('QUICKSEARCH');?>
...')value=''" onblur="if(this.value=='')value='<?php echo @constant('QUICKSEARCH');?>
...';" />
                        <div id="LSResult" style="display: none;"><div id="LSShadow"></div></div>
                    </form>
                    <?php echo serendipity_smarty_hookPlugin(array('hook'=>"quicksearch_plugin",'hookAll'=>"true"),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php }?>

        <!-- this is the actual content of the blog, entries column plus one or two      -->
        <!-- sidebars, depending on how users configure their sidebar plugins            -->

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='3sbs') {?>
            <!-- case 1: 3 columns, sidebar-content-sidebar -->
            <div id="serendipityLeftSideBar" class="threeside layout3sbs_left">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="content" class="threemain layout3sbs_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            <div id="serendipityRightSideBar" class="threeside layout3sbs_right">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>    
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='3bss') {?>
            <!-- case 2: 3 columns, content-sidebar-sidebar -->
            <div id="content" class="threemain layout3bss_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            <div id="serendipityLeftSideBar" class="threeside layout3bss_left">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>    
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="serendipityRightSideBar" class="threeside layout3bss_right">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='3ssb') {?>
            <!-- case 3: 3 columns, sidebar-sidebar-content -->
            <div id="serendipityLeftSideBar" class="threeside layout3ssb_left">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="serendipityRightSideBar" class="threeside layout3ssb_right">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="content" class="threemain layout3ssb_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='2sb') {?>
            <!-- case 4: 2 columns, left sidebar only -->
            <div id="serendipityLeftSideBar" class="twoside layout2sb_left">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left'||$_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="content" class="twomain layout2sb_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='2bs') {?>
            <!-- case 5: 2 columns, right sidebar only -->
            <div id="content" class="twomain layout2bs_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            <div id="serendipityRightSideBar" class="twoside layout2bs_right">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left'||$_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='1col') {?>
            <!-- case 6: 1 column, sidebar(s) below -->
            <div id="content" class="onemain layout1col_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>

            <div id="serendipityRightSideBar" class="onefull layout1col_right_full">
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left'||$_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
            <!-- #sbsitenav: like #sitenav, but placed within the sidebar -->
                <div id="sbsitenav" class="serendipitySideBarItem">
                    <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    <div class="serendipitySideBarContent">
            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                        <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                    </div>
                    <div class="serendipitySideBarFooter"></div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='2sbf') {?>
            <!-- case 7: 2 columns, left sidebar plus sidebar below -->
            <div id="serendipityLeftSideBar" class="twoside layout2sb_left">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="content" class="twomain layout2sb_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            <div id="serendipityRightSideBar" class="onefull layout1col_right_full">
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
            <!-- #sbsitenav: like #sitenav, but placed within the sidebar -->
                <div id="sbsitenav" class="serendipitySideBarItem">
                    <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    <div class="serendipitySideBarContent">
            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                        <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                    </div>
                    <div class="serendipitySideBarFooter"></div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['template_option']->value['layouttype']=='2bsf') {?>
            <!-- case 8: 2 columns, right sidebar plus sidebar below -->
            <div id="content" class="twomain layout2bs_content hfeed">
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            <div id="serendipityRightSideBar" class="twoside layout2bs_right">
                <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='right') {?>
                    <!-- #sbsitenav: like #sitenav, but placed within the sidebar                    -->
                    <div id="sbsitenav" class="serendipitySideBarItem">
                        <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        <div class="serendipitySideBarContent">
                            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                            <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                        </div>
                        <div class="serendipitySideBarFooter"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rightSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"right"),$_smarty_tpl);?>
<?php }?>
            </div>
            <div id="serendipityLeftSideBar" class="onefull layout1col_right_full">
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']=='left') {?>
            <!-- #sbsitenav: like #sitenav, but placed within the sidebar -->
                <div id="sbsitenav" class="serendipitySideBarItem">
                    <h3 class="serendipitySideBarTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['sitenav_sidebar_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    <div class="serendipitySideBarContent">
            <!-- the line below must remain as a single uninterrupted line to display correctly in ie6 -->
                        <ul><?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sbnav"]['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?><li class="<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?>currentpage<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['first']) {?> sbnavlink_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sbnav']['last']) {?> sbnavlink_last<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li><?php } ?></ul>
                    </div>
                    <div class="serendipitySideBarFooter"></div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['leftSidebarElements']->value>0) {?><?php echo serendipity_smarty_printSidebar(array('side'=>"left"),$_smarty_tpl);?>
<?php }?>
            </div>
        <?php }?>

        <!-- #footer: the page footer can be used for additional information             -->
        <div id="footer">
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['footer_text_toggle']=='true') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['template_option']->value['footer_text'];?>
</p>
            <?php }?>

            <!-- ************************************************************** -->
            <!-- The image and link below must remain if you use this template  -->
            <!-- or create your own template based on the bulletproof framework -->
            <!-- ************************************************************** -->

            <div id="serendipity_bulletproof_button"><a href="http://s9y-bulletproof.com" title="Based on the s9y Bulletproof template framework"><img src="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/bulletproof_button.png" alt="Based on the s9y Bulletproof template framework" width="100" height="28" /></a></div>

            <!-- ************************************************************** -->
            <!-- Feel free to insert your own "Template by" name and link below -->
            <!-- if you create a custom template based on bulletproof.          -->
            <!-- ************************************************************** -->

            <div id="serendipity_credit_line"><?php echo @constant('POWERED_BY');?>
 <a href="http://www.s9y.org">s9y</a> &ndash; Template by <a href="http://s9y-bulletproof.com">Bulletproof development team</a>.<br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_option']->value['colorset_data']['attribution'], ENT_QUOTES, 'UTF-8', true);?>
</div>
            
            <?php if ($_smarty_tpl->tpl_vars['template_option']->value['counter_code_toggle']=='true') {?>
                <div class="counter_code"><?php echo $_smarty_tpl->tpl_vars['template_option']->value['counter_code'];?>
</div>
            <?php }?>
            <!-- option to display navigation links in the footer                            -->
            <?php if (($_smarty_tpl->tpl_vars['template_option']->value['sitenavpos']!='none'&&$_smarty_tpl->tpl_vars['template_option']->value['sitenav_footer']=='true')) {?>
                <div id="footer_sitenav">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars["navlink"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["navlink"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["navlink"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["navlink"]->iteration=0;
 $_smarty_tpl->tpl_vars["navlink"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["navlink"]->key => $_smarty_tpl->tpl_vars["navlink"]->value) {
$_smarty_tpl->tpl_vars["navlink"]->_loop = true;
 $_smarty_tpl->tpl_vars["navlink"]->iteration++;
 $_smarty_tpl->tpl_vars["navlink"]->index++;
 $_smarty_tpl->tpl_vars["navlink"]->first = $_smarty_tpl->tpl_vars["navlink"]->index === 0;
 $_smarty_tpl->tpl_vars["navlink"]->last = $_smarty_tpl->tpl_vars["navlink"]->iteration === $_smarty_tpl->tpl_vars["navlink"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navbar']['first'] = $_smarty_tpl->tpl_vars["navlink"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navbar']['last'] = $_smarty_tpl->tpl_vars["navlink"]->last;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['currpage']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']||$_smarty_tpl->tpl_vars['currpage2']->value==$_smarty_tpl->tpl_vars['navlink']->value['href']) {?> class="currentpage"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlink']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }?>
        </div>
        <div id="wrapper_footer"></div>
    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['raw_data']->value;?>


<?php echo serendipity_smarty_hookPlugin(array('hook'=>"frontend_footer"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['is_embedded']->value!=true) {?>
    </body>
    </html>
<?php }?>
<?php }} ?>
