<?php
/**
 * Serendipity compat functions
 *
 * @copyright 2003-2005 Jannis Hermanns (on behalf the Serendipity Developer Team)
 * @copyright 2013 Falk Doering
 * @license New BSD
 */

$serendipity = array();

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
