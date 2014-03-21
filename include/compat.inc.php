<?php
/**
 * Serendipity compat functions
 *
 * @copyright 2003-2005 Jannis Hermanns (on behalf the Serendipity Developer Team)
 * @copyright 2013 Falk Doering
 * @license New BSD
 */

$serendipity = array();

/**
 * Set our own exeption handler to convert all errors into exeptions automatically
 * function_exists() avoids 'cannot redeclare previously declared' fatal errors in XML feed context.
 *
 * See Notes about returning false
 *
 * @access public
 * @param  standard
 * @return null
 */
if (!function_exists('errorToExceptionHandler')) {
    function errorToExceptionHandler($errNo, $errStr, $errFile = '', $errLine = NULL, $errContext = array()) {
        global $serendipity;

        $rep  = ini_get('error_reporting');
        $args = func_get_args();

        // respect user has set php error_reporting to not display any errors at all
        if (!($rep & $errStr)) { return false; }
        // user used @ to specify ignoring all errors or $php_errormsg messages returned with error_reporting = 0
        if ($rep == 0) { return false; }
        // if not using Serendipity testing and user or ISP has set PHPs display_errors to show no errors at all, respect
        if ($serendipity['production'] === true && ini_get('display_errors') == 0) { return false; }
        // Several plugins might not adapt to proper style. This should not completely kill our execution.
        if ($serendipity['production'] !== 'debug' && preg_match('@Declaration.*should be compatible with@i', $args[1])) {
            #if (!headers_sent()) echo "<strong>Compatibility warning:</strong> Please upgrade file old '{$args[2]}', it contains incompatible signatures.<br/>Details: {$args[1]}<br/>";
            return false;
        }
        // any other errors go here - throw errors as exception
        if ($serendipity['production'] === 'debug') {

            // We don't want the notices - but everything else !
            echo '<p> == FULL DEBUG ERROR MODE == </p>';
            echo '<pre>';
            // trying to be as detailled as possible - but beware using args containing sensibel data like passwords
            if (function_exists('debug_backtrace') && version_compare(PHP_VERSION, '5.3.6') >= 0) {
                if ( version_compare(PHP_VERSION, '5.4') >= 0 ) {
                    $debugbacktrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 8);
                } else {
                    $debugbacktrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
                }
                print_r($debugbacktrace);
            }
            //print_r($args); // debugging
            // debugbacktrace is nice, but additional it is good to have the verbosity of SPL EXCEPTIONS, except for db connect errors
            // compare version to not get strange T_NEW parse errors (http://board.s9y.org/viewtopic.php?f=10&t=19436)
            if (!$serendipity['dbConn'] || version_compare(PHP_VERSION, '5.3', '<')) {
                echo '<p>' . $errStr . ' in ' . $errFile . ' on line ' . $errLine . '</p>';
            } else {
                throw new ErrorException($errStr); // tracepath = all, if not ini_set('display_errors', 0);
            }
            echo '</pre>'; // if using throw new ... this ending tag will not be send and displayed, but it still looks better and browsers don't really care
            exit; // make sure to exit in case of database connection errors.
        }
        if ($serendipity['production'] === false) {
            echo '<p> == TESTING ERROR MODE == </p>';
            echo '<pre>';
            // see notes above
            if (!$serendipity['dbConn'] || version_compare(PHP_VERSION, '5.3', '<')) {
                echo '<p>' . $errStr . ' in ' . $errFile . ' on line ' . $errLine . '</p>';
            } else {
                throw new ErrorException($errStr); // tracepath = all, if not ini_set('display_errors', 0);
            }
            echo '</pre>'; // if using throw new ... this ending tag will not be send and displayed, but it still looks better and browsers don't really care
            exit; // make sure to exit in case of database connection errors.
        }
        if ($serendipity['production'] === true) {
            if( $serendipity['serendipityUserlevel'] >= USERLEVEL_ADMIN ) {
                // ToDo: enhance for more special serendipity error needs
                $str  = " == SERENDIPITY ERROR == ";
                $str .= '<p>' . $errStr . ' in ' . $errFile . ' on line ' . $errLine . '</p>';
                #var_dump(headers_list());
                if (headers_sent()) {
                    serendipity_die($str); // case HTTP headers: needs to halt with die() here, else it will path through and gets written underneath blog content, which hardly isn't seen by many users
                } else {
                    // see global include of function in plugin_api.inc.php
                    // this also reacts on non eye-displayed errors with following small javascript,
                    // while being in tags like <select> to push on top of page, else return non javascript use $str just there
                    // sadly we can not use HEREDOC notation here, since this does not execute the javascript after finished writing
                    echo "\n".'<script>
var fragment = window.top.create("Error redirect: '.addslashes($str).'");
document.body.insertBefore(fragment, document.body.childNodes[0]);
' . "\n</script>\n<noscript>" . $str . "</noscript>\n";
                }
            }
        }
    }
}

if (extension_loaded('filter') && function_exists('input_name_to_filter') && input_name_to_filter(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = input_get(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = input_get(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = input_get(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }
    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = input_get(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

if (extension_loaded('filter') && function_exists('filter_id') && function_exists('filter_input') && filter_id(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = filter_input(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = filter_input(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = filter_input(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }

    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = filter_input(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

// Merge get and post into the serendipity array
$serendipity['GET']    = &$_GET['serendipity'];
$serendipity['POST']   = &$_POST['serendipity'];
$serendipity['COOKIE'] = &$_COOKIE['serendipity'];

// Attempt to fix IIS compatibility
if (empty($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'] . '?' . (!empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '');
}

// Some security issues
if (isset($serendipity['GET']['searchTerm'])) {
    $serendipity['GET']['searchTerm'] = htmlspecialchars(strip_tags($serendipity['GET']['searchTerm']));
}

/**
 * Get the current charset
 *
 * @return  string      Empty string or "UTF-8/".
 */
function serendipity_getCharset() {
    global $serendipity;

    $charset = $serendipity['charset'];
    if (!empty($_POST['charset'])) {
        if ($_POST['charset'] == 'UTF-8/') {
            $charset = 'UTF-8/';
        } else {
            $charset = '';
        }
    }

    if (!empty($serendipity['POST']['charset'])) {
        if ($serendipity['POST']['charset'] == 'UTF-8/') {
            $charset = 'UTF-8/';
        } else {
            $charset = '';
        }
    }
    return $charset;
}

/**
 * Detect the language of the User Agent/Visitor
 *
 * This function needs to be included at this point so that it is globally available, also
 * during installation.
 *
 * @access public
 * @param   boolean     Toggle whether to include the language that has been autodetected.
 * @return  string      Return the detected language name
 */
function serendipity_detectLang($use_include = false) {
    global $serendipity;

    $supported_languages = array_keys($serendipity['languages']);
    $possible_languages = explode(',', (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : ''));
    if (is_array($possible_languages)) {
        $charset = serendipity_getCharset();

        foreach($possible_languages as $index => $lang) {
            $preferred_language = strtolower(preg_replace('@^([^\-_;]*)_?.*$@', '\1', $lang));
            if (in_array($preferred_language, $supported_languages)) {
                if ($use_include) {
                    @include(S9Y_INCLUDE_PATH . 'lang/' . $charset . 'serendipity_lang_' . $preferred_language . '.inc.php');
                    $serendipity['autolang'] = $preferred_language;
                }
                return $preferred_language;
            } // endif
        } // endforeach
    } // endif

    return $serendipity['lang'];
}

/**
 * Make Serendipity emit an error message and terminate the script
 *
 * @access public
 * @param   string  HTML code to die with
 * @return null
 */
function serendipity_die($html) {
    die(
'<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . LANG_CHARSET . '">
    </head>
    <body>' . $html . '</body>
</html>');
}

/*
 *  Some defaults for our config vars.
 *  They are likely to be overwritten later in the code
 */
$serendipity['templatePath'] = 'templates/';
if (!isset($serendipity['serendipityPath'])) {
    $serendipity['serendipityPath'] = (defined('S9Y_INCLUDE_PATH') ? S9Y_INCLUDE_PATH : './');
}

$serendipity['indexFile'] = 'index.php';

if (function_exists('date_default_timezone_get')) {
    // We currently offer no Timezone setting (only offset to UTC), so we
    // rely on the OS' timezone.
    @date_default_timezone_set(@date_default_timezone_get());
}
