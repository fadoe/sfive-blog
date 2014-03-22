<?php

namespace Sfive\Plugin;

abstract class AbstractPlugin implements PluginInterface
{
    var $instance      = null;
    var $protected     = false;
    var $wrap_class    = 'serendipitySideBarItem';
    var $title_class   = 'serendipitySideBarTitle';
    var $content_class = 'serendipitySideBarContent';
    var $title         = null;
    var $pluginPath    = null;
    var $act_pluginPath= null;
    var $pluginFile    = null;
    var $serendipity_owner = null;

    /**
     * Perform configuration routines
     *
     * Called by Serendipity when the plugin is being configured.
     * Can be used to query the database for configuration values that
     * only need to be available for the global configuration and not
     * on each page request.
     *
     * @access public
     * @return true
     */
    function performConfig(&$bag)
    {
        return true;
    }

    /**
     * Perform install routines
     *
     * Called by Serendipity when the plugin is first installed.
     * Can be used to install database tables etc.
     *
     * @access public
     * @return true
     */
    function install()
    {
        return true;
    }

    /**
     * Perform uninstall routines
     *
     * Called by Serendipity when the plugin is removed/uninstalled.
     * Can be used to drop installed database tables etc.
     *
     * @access public
     * @param  object   A property bag object
     * @return true
     */
    function uninstall(&$propbag)
    {
        return true;
    }

    /**
     * The introspection function of a plugin, to setup properties
     *
     * Called by serendipity when it wants to display information
     * about your plugin.
     * You need to override this method in your child class.
     *
     * @access public
     * @param   object  A property bag object you can manipulate
     * @return true
     */
    public function introspect($propbag)
    {
        $propbag->add('copyright', 'MIT License');
        $propbag->add('name'     , get_class($this));

        // $propbag->add(
        //   'configuration',
        //   array(
        //     'text field',
        //     'foo bar'
        //   )
        // );

        $this->protected = false; // If set to TRUE, only allows the owner of the plugin to modify its configuration

        return true;
    }

    /**
     * Introspection of a plugin configuration item
     *
     * Called by serendipity when it wants to display the configuration
     * editor for your plugin.
     * $name is the name of a configuration item you added in
     * your instrospect method.
     * You need to fill the property bag with appropriate items
     * that describe the type and value(s) for that particular
     * configuration option.
     * You need to override this method in your child class if
     * you have configuration options.
     *
     * @access public
     * @param   string      Name of the config item
     * @param   object      A property bag object you can store the configuration in
     * @return
     */
    public function introspect_config_item($name, $propbag)
    {
        return false;
    }

    /**
     * Validate plugin configuration options.
     *
     * Called from Plugin Configuration manager. Can be extended by your own plugin, if you need.
     *
     * @access public
     * @param   string      Name of the config item to validate
     * @param   object      Property bag of the config item
     * @param   value       The value of a config item
     * @return
     */
    function validate($config_item, &$cbag, &$value)
    {
        static $pattern_mail  = '([\.\-\+~@_0-9a-z]+?)';
        static $pattern_url   = '([@!=~\?:&;0-9a-z#\.\-_\/]+?)';

        $validate = $cbag->get('validate');
        $valid    = true;

        if (!empty($validate)) {
            switch ($validate) {
                case 'string':
                    if (!preg_match('@^\w*$@i', $value)) {
                        $valid = false;
                    }
                    break;

                case 'words':
                    if (!preg_match('@^[\w\s\r\n,\.\-!\?:;&_/=%\$]*$@i', $value)) {
                        $valid = false;
                    }
                    break;

                case 'number':
                    if (!preg_match('@^[\d]*$@', $value)) {
                        $valid = false;
                    }
                    break;

                case 'url':
                    if (!preg_match('�^' . $pattern_url . '$�', $value)) {
                        $valid = false;
                    }
                    break;

                case 'mail':
                    if (!preg_match('�^' . $pattern_mail . '$�', $value)) {
                        $valid = false;
                    }
                    break;

                case 'path':
                    if (!preg_match('@^[\w/_.\-~]$@', $value)) {
                        $valid = false;
                    }
                    break;

                default:
                    if (!preg_match($validate, $value)) {
                        $valid = false;
                    }
                    break;
            }

            $error = $cbag->get('validate_error');
            if ($valid) {
                return true;
            } elseif (!empty($error)) {
                return $error;
            } else {
                return sprintf(PLUGIN_API_VALIDATE_ERROR, $config_item, $validate);
            }
        }

        return true;
    }

    /**
     * Output plugin's contents (Sidebar plugins)
     *
     * Called by serendipity when it wants your plugin to display itself.
     * You need to set $title to be whatever text you want want to
     * appear in the item caption space.
     * Simply echo/print your content to the output; serendipity will
     * capture it and make things work.
     * You need to override this method in your child class.
     *
     * @access public
     * @param   string       The referenced varaiable that holds the sidebar title of your plugin.
     * @return null
     */
    function generate_content(&$title)
    {
        $title = 'Sample!';
        echo     'This is a sample!';
    }

    /**
     * Get a config value of the plugin
     *
     * @access public
     * @param   string  Name of the config value to fetch
     * @param   mixed   The default value of a configuration item, if not set
     * @param   boolean If true, the default value will only be set if the plugin config item was not set.
     * @return  mixed   The value of the config item
     */
    function get_config($name, $defaultvalue = null, $empty = true)
    {
        $_res = serendipity_get_config_var($this->instance . '/' . $name, $defaultvalue, $empty);

        if (is_null($_res)) {
            // A protected plugin by a specific owner may not have its values stored in $serendipity
            // because of the special authorid. To display such contents, we need to fetch it
            // seperately from the DB.
            $_res = serendipity_get_user_config_var($this->instance . '/' . $name, null, $defaultvalue);
        }

        if (is_null($_res)) {
            $cbag = new \serendipity_property_bag();
            $this->introspect_config_item($name, $cbag);
            $_res = $cbag->get('default');
            unset($cbag);
            // Set the fetched value, so the default will not be fetched the next config call time
            $this->set_config($name, $_res);
        }

        return $_res;
    }

    /**
     * Sets a configuration value for a plugin
     *
     * @access public
     * @param   string  Name of the plugin configuration item
     * @param   string  Value of the plugin configuration item
     * @param   string  A concatenation key for imploding arrays
     * @return
     */
    function set_config($name, $value, $implodekey = '^')
    {
        $name = $this->instance . '/' . $name;

        if (is_array($value)) {
            $dbvalue = implode($implodekey, $value);
            $_POST['serendipity']['plugin'][$name] = $dbvalue;
        } else {
            $dbvalue = $value;
        }

        return serendipity_set_config_var($name, $dbvalue);
    }

    /**
     * Garbage Collection
     *
     * Called by serendipity after insertion of a config item. If you want to kick out certain
     * elements based on contents, create the corresponding function here.
     *
     * @access public
     * @return true
     */
    function cleanup()
    {
        // Cleanup. Remove all empty configs on SAVECONF-Submit.
        // serendipity_plugin_api::remove_plugin_value($this->instance, array('configname1', 'configname2'));
        return true;
    }

    /**
     * Auto-Register dependencies of a plugin
     *
     * This method evaluates the "dependencies" member variable to check which plugins need to be installed.
     *
     * @access public
     * @param   boolean     If true, a depending plugin will be removed when this plugin is uninstalled
     * @param   int         The owner id of the current plugin
     * @return true
     */
    function register_dependencies($remove = false, $authorid = '0')
    {
        global $serendipity;

        if (isset($this->dependencies) && is_array($this->dependencies)) {

            if ($remove) {
                $dependencies = @explode(';', $this->get_config('dependencies'));
                $modes        = @explode(';', $this->get_config('dependency_modes'));

                if (!empty($dependencies) && is_array($dependencies)) {
                    foreach($dependencies AS $idx => $dependency) {
                        if ($modes[$idx] == 'remove' && serendipity_plugin_api::exists($dependency)) {
                            serendipity_plugin_api::remove_plugin_instance($dependency);
                        }
                    }
                }
            } else {
                $keys  = array();
                $modes = array();
                foreach($this->dependencies AS $dependency => $mode) {
                    $exists = serendipity_plugin_api::exists($dependency);
                    if (!$exists) {
                        if (serendipity_plugin_api::is_event_plugin($dependency)) {
                            $keys[] = serendipity_plugin_api::autodetect_instance($dependency, $authorid, true);
                        } else {
                            $keys[] = serendipity_plugin_api::autodetect_instance($dependency, $authorid, false);
                        }
                    } else {
                        $keys[] = $exists;
                    }

                    $modes[] = $mode;
                }

                $this->set_config('dependencies',     implode(';', $keys));
                $this->set_config('dependency_modes', implode(';', $modes));
            }
        }

        return true;
    }

    /**
     * Parses a smarty template file (which can be stored in either the plugin directory, the user template directory
     * or the default template directory, and return the parsed output.
     *
     * @access public
     * @param  string   template filename (no directory!)
     * @return string   Parsed Smarty return
     */
    function &parseTemplate($filename) {
        global $serendipity;

        $filename = basename($filename);
        $tfile    = serendipity_getTemplateFile($filename, 'serendipityPath');
        if (!$tfile || $tfile == $filename) {
            $tfile = dirname($this->pluginFile) . '/' . $filename;
        }

        return $serendipity['smarty']->fetch('file:'. $tfile);
    }

}
