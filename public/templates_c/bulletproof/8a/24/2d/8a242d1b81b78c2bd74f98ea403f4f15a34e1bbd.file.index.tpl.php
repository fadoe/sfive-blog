<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-26 13:56:41
         compiled from "/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/default/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1831376132530de48980b951-51495275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a242d1b81b78c2bd74f98ea403f4f15a34e1bbd' => 
    array (
      0 => '/data/falk/apache2/var/www/vhosts/sfive-blog/public/templates/default/admin/index.tpl',
      1 => 1393412221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831376132530de48980b951-51495275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_vars' => 0,
    'blogTitle' => 0,
    'serendipityHTTPPath' => 0,
    'serendipityBaseURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_530de4899ec795_30807038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530de4899ec795_30807038')) {function content_530de4899ec795_30807038($_smarty_tpl) {?><html>
    <head>
<!-- ADMIN-ENTRY TEMPLATE: index.tpl START -->
        <title><?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['title'];?>
 - <?php echo @constant('SERENDIPITY_ADMIN_SUITE');?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo @constant('LANG_CHARSET');?>
" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['css_file'];?>
" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['admin_css_file'];?>
" />

        <script type="text/javascript">
        
        function spawn() {
            if (self.Spawnextended) {
                Spawnextended();
            }

            if (self.Spawnbody) {
                Spawnbody();
            }

            if (self.Spawnnugget) {
                Spawnnugget();
            }
        }

        function SetCookie(name, value) {
            var today  = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + (60*60*24*30*1000));
            document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
        }

        function addLoadEvent(func) {
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {
            window.onload = func;
          } else {
            window.onload = function() {
              oldonload();
              func();
            }
          }
        }
        

        </script>
    <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['admin_installed']) {?>
        <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_header",'hookAll'=>"true"),$_smarty_tpl);?>

    <?php }?>
    </head>

    <body id="serendipity_admin_page" onload="spawn()">
        <table cellspacing="0" cellpadding="0" border="0" id="serendipityAdminFrame">


        <?php if (!$_smarty_tpl->tpl_vars['admin_vars']->value['no_banner']) {?>
            <tr>
                <td colspan="2" id="serendipityAdminBanner">
                <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['admin_installed']) {?>
                    <h1><?php echo @constant('SERENDIPITY_ADMIN_SUITE');?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['blogTitle']->value;?>
</h2>
                <?php } else { ?>
                    <h1><?php echo @constant('SERENDIPITY_INSTALLATION');?>
</h1>
                <?php }?>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="serendipityAdminInfopane">
                    <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['is_logged_in']) {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['self_info'];?>
</span>
                    <?php }?>
                </td>
            </tr>
        <?php }?>


            <tr valign="top">
<?php if (!$_smarty_tpl->tpl_vars['admin_vars']->value['is_logged_in']) {?>


    <?php echo serendipity_smarty_refhookPlugin($_smarty_tpl->tpl_vars['admin_vars']->value['out'],'backend_login_page');?>

                <td colspan="2" class="serendipityAdminContent">
                    <div id="serendipityAdminWelcome" align="center">
                        <h2><?php echo @constant('WELCOME_TO_ADMIN');?>
</h2>
                        <h3><?php echo @constant('PLEASE_ENTER_CREDENTIALS');?>
</h3>
                        <?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['out']['header'];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['post_action']!=''&&!$_smarty_tpl->tpl_vars['admin_vars']->value['is_logged_in']) {?>
                        <div class="serendipityAdminMsgError"><img width="22px" height="22px" style="border: 0px; padding-right: 2px; vertical-align: middle" src="<?php echo serendipity_smarty_getFile(array('file'=>'admin/img/admin_msg_error.png'),$_smarty_tpl);?>
" alt="" /><?php echo @constant('WRONG_USERNAME_OR_PASSWORD');?>
</div>
                    <?php }?>
                    <form action="serendipity_admin.php" method="post">
                        <input type="hidden" name="serendipity[action]" value="admin" />
                        <table id="serendipityAdminCredentials" cellspacing="10" cellpadding="0" border="0" align="center">
                            <tr>
                                <td><?php echo @constant('USERNAME');?>
</td>
                                <td><input class="input_textbox" type="text" name="serendipity[user]" /></td>
                            </tr>
                            <tr>
                                <td><?php echo @constant('PASSWORD');?>
</td>
                                <td><input class="input_textbox" type="password" name="serendipity[pass]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="input_checkbox" id="autologin" type="checkbox" name="serendipity[auto]" /><label for="autologin"> <?php echo @constant('AUTOMATIC_LOGIN');?>
</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="submit" value="<?php echo @constant('LOGIN');?>
 &gt;" class="input_button serendipityPrettyButton" /></td>
                            </tr>
                            <?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['out']['table'];?>

                        </table>
                    </form>
                    <?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['out']['footer'];?>

                    <p id="serendipityBackToBlog"><a href="<?php echo $_smarty_tpl->tpl_vars['serendipityHTTPPath']->value;?>
"><?php echo @constant('BACK_TO_BLOG');?>
</a></p>

<?php } else { ?>

    <?php if (!$_smarty_tpl->tpl_vars['admin_vars']->value['no_sidebar']) {?>
                <td id="serendipitySideBar">

    
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMain">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMainLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainFrontpage"><a href="serendipity_admin.php"><?php echo @constant('ADMIN_FRONTPAGE');?>
</a></li>
                        <?php if (serendipity_checkPermission('personalConfiguration')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainPersonal"><a href="serendipity_admin.php?serendipity[adminModule]=personal"><?php echo @constant('PERSONAL_SETTINGS');?>
</a></li>
                        <?php }?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMainLinks" style="display:none"></li>
                    </ul>
                    <br class="serendipitySideBarMenuSpacer" />                                                                                             
    

    
                    <?php if (serendipity_checkPermission('adminEntries')||serendipity_checkPermission('adminEntriesPlugins')) {?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuEntry">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuEntryLinks"><?php echo @constant('ADMIN_ENTRIES');?>
</li>
                        <?php if (serendipity_checkPermission('adminEntries')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=new"><?php echo @constant('NEW_ENTRY');?>
</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=editSelect"><?php echo @constant('EDIT_ENTRIES');?>
</a></li>
                        <?php }?>

                        <?php if (serendipity_checkPermission('adminComments')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=comments"><?php echo @constant('COMMENTS');?>
</a></li>
                        <?php }?>

                        <?php if (serendipity_checkPermission('adminCategories')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=category&amp;serendipity[adminAction]=view"><?php echo @constant('CATEGORIES');?>
</a></li>
                        <?php }?>

                        <?php if (serendipity_checkPermission('adminEntries')||serendipity_checkPermission('adminEntriesPlugins')) {?>
                        <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['no_create']!==true) {?> <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_sidebar_entries",'hookAll'=>"true"),$_smarty_tpl);?>
<?php }?>
                        <?php }?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuEntryLinks" style="display:none"></li>
                    </ul>
                    <?php }?>
                    

    
        <?php if (serendipity_checkPermission('adminImages')) {?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMedia">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMediaLinks"><?php echo @constant('MEDIA');?>
</li>
                        <?php if (serendipity_checkPermission('adminImagesAdd')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=addSelect"><?php echo @constant('ADD_MEDIA');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminImagesView')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media"><?php echo @constant('MEDIA_LIBRARY');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminImagesDirectories')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect"><?php echo @constant('MANAGE_DIRECTORIES');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminImagesSync')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=sync" onclick="return confirm('<?php echo @constant('WARNING_THIS_BLAHBLAH');?>
');"><?php echo @constant('CREATE_THUMBS');?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['no_create']!==true) {?> <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_sidebar_entries_images",'hookAll'=>"true"),$_smarty_tpl);?>
<?php }?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMediaLinks" style="display:none"></li>
                    </ul>
        <?php }?>
    

    
        <?php if (serendipity_checkPermission('adminTemplates')||serendipity_checkPermission('adminPlugins')) {?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuAppearance">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuAppearanceLinks"><?php echo @constant('APPEARANCE');?>
</li>
                        <?php if (serendipity_checkPermission('adminTemplates')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=templates"><?php echo @constant('MANAGE_STYLES');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminPlugins')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=plugins"><?php echo @constant('CONFIGURE_PLUGINS');?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['no_create']!==true) {?> <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_sidebar_admin_appearance",'hookAll'=>"true"),$_smarty_tpl);?>
<?php }?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuAppearance" style="display:none"></li>
                    </ul>
        <?php }?>
    

    
        <?php if (serendipity_checkPermission('adminUsersGroups')||serendipity_checkPermission('adminImport')||serendipity_checkPermission('siteConfiguration')||serendipity_checkPermission('blogConfiguration')||serendipity_checkPermission('adminUsers')) {?>
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuUserManagement">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuUserManagementLinks"><?php echo @constant('ADMIN');?>
</li>
                        <?php if (serendipity_checkPermission('siteConfiguration')||serendipity_checkPermission('blogConfiguration')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=configuration"><?php echo @constant('CONFIGURATION');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminUsers')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=users"><?php echo @constant('MANAGE_USERS');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminUsersGroups')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=groups"><?php echo @constant('MANAGE_GROUPS');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('adminImport')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=import"><?php echo @constant('IMPORT_ENTRIES');?>
</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=export"><?php echo @constant('EXPORT_ENTRIES');?>
</a></li>
                        <?php }?>
                        <?php if (serendipity_checkPermission('siteConfiguration')||serendipity_checkPermission('blogConfiguration')) {?>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=integrity"><?php echo @constant('INTEGRITY');?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['no_create']!==true) {?> <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_sidebar_admin",'hookAll'=>"true"),$_smarty_tpl);?>
<?php }?>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuUserManagement" style="display:none"></li>
                    </ul>
        <?php }?>
    

    
                    <br class="serendipitySideBarMenuSpacer" />                                                                                             
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuLogout">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutWeblog"><a href="<?php echo $_smarty_tpl->tpl_vars['serendipityBaseURL']->value;?>
"><?php echo @constant('BACK_TO_BLOG');?>
</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutLogout"><a href="serendipity_admin.php?serendipity[adminModule]=logout"><?php echo @constant('LOGOUT');?>
</a></li>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                    </ul>
    

                </td>
    <?php }?>
                <td class="serendipityAdminContent">

    
                    <?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['main_content'];?>

    

<?php }?>

                </td>
            </tr>
        </table>
        <?php if (!$_smarty_tpl->tpl_vars['admin_vars']->value['no_footer']) {?>
        <div class="serendipityAdminFooterSpacer">
            <br />
        </div>
        <div id="serendipityAdminFooter">
            <span><?php echo $_smarty_tpl->tpl_vars['admin_vars']->value['version_info'];?>
</span>
        </div>                            
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['admin_vars']->value['admin_installed']) {?>
            <?php echo serendipity_smarty_hookPlugin(array('hook'=>"backend_footer",'hookAll'=>"true"),$_smarty_tpl);?>

        <?php }?>

    </body>
<!-- ADMIN-ENTRY TEMPLATE: index.tpl END -->
</html>
<?php }} ?>
