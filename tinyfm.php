<?php
//Default Configuration
$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":false,"calc_folder":false}';

/**
 * H3K | Tiny File Manager V2.3.8
 * CCP Programmers | ccpprogrammers@gmail.com
 * https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.3.8+/EV'); // EV-soft

//Application Title
define('APP_TITLE', 'File Manager');

// Auth with login/password (set true/false to enable/disable it)
// Is independent from IP white- and blacklisting
$use_auth = false;

// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'user' => '$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO' //12345
);

// Readonly users (username array)
$readonly_users = array(
    'user'
);

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array();

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time() - http://php.net/manual/en/timezones.php
$default_timezone = 'UTC'; // UTC

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = '../';

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
$datetime_format = 'd.m.y H:i';

// allowed file extensions for upload and rename
// e.g. 'gif,png,jpg' // all lowercase // EV-soft
$allowed_extensions = ''; 

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '?img=favicon';

// Array of files and folders excluded from listing
// e.r array('myfile.html', 'personal-folder')
$GLOBALS['exclude_items'] = array();

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// google => View documents using Google Docs Viewer
// microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online dov viewer
$GLOBALS['online_viewer'] = 'google';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;

// max upload file size
// IIS: - Google search "maxAllowedContentLength max file upload PHP size"  //  EV-soft
// Apache: - Google search "Apache max file upload PHP size"
// PHP: upload_max_filesize, post_max_size 
define('MAX_UPLOAD_SIZE', '2048');  // MB

//--- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL

// private key and session name to store to the session
if ( !defined( 'FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'filemanager');
}

// Configuration
$cfg = new FM_Config();

// Default language
$lang = isset($cfg->data['lang']) ? $cfg->data['lang'] : 'en';

// Show or hide files and folders that starts with a dot
$show_hidden_files = isset($cfg->data['show_hidden']) ? $cfg->data['show_hidden'] : true;

// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$report_errors = isset($cfg->data['error_reporting']) ? $cfg->data['error_reporting'] : true;

// Hide Permissions and Owner cols in file-listing
$hide_Cols = isset($cfg->data['hide_Cols']) ? $cfg->data['hide_Cols'] : true;

// Show Dirsize: true or speedup output: false
$calc_folder = isset($cfg->data['calc_folder']) ? $cfg->data['calc_folder'] : true;

// Current file in editor:     ## EV-soft
$editFile = '';

// Warn about JavaScript:     ## EV-soft
$javaMess = '<noscript>This page needs JavaScript activated to work! <br>Change your browser settings. <style>div { display:none; }</style></noscript>
';

// DataTables CDN files for DataTables internationalisation:
## //cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/$tablLang
switch (strtolower($lang)) {  //  EV-soft more
    case 'da'   : $tablLang = 'Danish.json'; break;
    case 'de'   : $tablLang = 'German.json'; break;
    case 'pl'   : $tablLang = 'Polish.json'; break;
    case 'ru'   : $tablLang = 'Russian.json'; break;
    case 'it'   : $tablLang = 'Italian.json'; break;
    case 'fr'   : $tablLang = 'French.json'; break;
    case 'es'   : $tablLang = 'Spanish.json'; break;
    case 'ca'   : $tablLang = 'Catalan.json'; break;
    case 'id'   : $tablLang = 'Indonesian.json'; break;
    case 'gr'   : $tablLang = 'Greek.json'; break;
    case 'pt'   : $tablLang = 'Portuguese.json'; break;
    case 'vi'   : $tablLang = 'Vietnamese.json'; break;
    case 'he'   : $tablLang = 'Hebrew.json'; break;
    case 'ar'   : $tablLang = 'Arabic.json'; break;
    case 'th'   : $tablLang = 'Thai.json'; break;
    case 'zh-cn':
    case 'zh-tw': $tablLang = 'Chinese.json'; break;
    case 'cz'   : $tablLang = 'Czech.json'; break;
    default     : $tablLang = 'English.json';
};


//available languages
$lang_list = array(
    'en' => 'English'
);

if ($report_errors == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 1);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}

// if fm included
if (defined('FM_EMBED')) {
    $use_auth = false;
    $sticky_navbar = false;
} else {
    @set_time_limit(600);

    date_default_timezone_set($default_timezone);

    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }

    session_cache_limiter('');
    session_name(FM_SESSION_ID );
    @session_start();
}

if (empty($auth_users)) {
    $use_auth = false;
}

$is_https = isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)
    || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';

// update $root_url based on user specific directories
if (isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($directories_users[$_SESSION[FM_SESSION_ID]['logged']])) {
    $wd = fm_clean_path(dirname($_SERVER['PHP_SELF']));
    $root_url =  $root_url.$wd.DIRECTORY_SEPARATOR.$directories_users[$_SESSION[FM_SESSION_ID]['logged']];
}
// clean $root_url
$root_url = fm_clean_path($root_url);

// abs path for site
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . (!empty($root_url) ? '/' . $root_url : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . $_SERVER['PHP_SELF']);

// logout
if (isset($_GET['logout'])) {
    unset($_SESSION[FM_SESSION_ID]['logged']);
    fm_redirect(FM_SELF_URL);
}

// Show image here
if (isset($_GET['img'])) {
    fm_show_image($_GET['img']);
}

// Validate connection IP
if($ip_ruleset != 'OFF'){
    $clientIp = $_SERVER['REMOTE_ADDR'];

    $proceed = false;

    $whitelisted = in_array($clientIp, $ip_whitelist);
    $blacklisted = in_array($clientIp, $ip_blacklist);

    if($ip_ruleset == 'AND'){
        if($whitelisted == true && $blacklisted == false){
            $proceed = true;
        }
    } else
    if($ip_ruleset == 'OR'){
         if($whitelisted == true || $blacklisted == false){
            $proceed = true;
        }
    }

    if($proceed == false){
        trigger_error('User connection denied from: ' . $clientIp, E_USER_WARNING);

        if($ip_silent == false){
            fm_set_msg('Access denied. IP restriction applicable', 'error');
            fm_show_header_login();
            fm_show_message();
        }

        exit();
    }
}

// Auth
if ($use_auth) {
    if (isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']])) {
        // Logged
    } elseif (isset($_POST['fm_usr'], $_POST['fm_pwd'])) {
        // Logging In
        sleep(1);
        if(function_exists('password_verify')) {
            if (isset($auth_users[$_POST['fm_usr']]) && isset($_POST['fm_pwd']) && password_verify($_POST['fm_pwd'], $auth_users[$_POST['fm_usr']])) {
                $_SESSION[FM_SESSION_ID]['logged'] = $_POST['fm_usr'];
                fm_set_msg('You are logged in');
                fm_redirect(FM_SELF_URL . '?p=');
            } else {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                fm_set_msg('Login failed. Invalid username or password', 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg('password_hash not supported, Upgrade PHP version', 'error');;
        }
    } else {
        // Form
        unset($_SESSION[FM_SESSION_ID]['logged']);
        fm_show_header_login();
        fm_show_message();
        ?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="brand">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="121px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z"/>
                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z"/>
                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z"/></g>
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1 class="card-title"><?php echo APP_TITLE; ?></h1>
                        </div>
                        <div class="card fat">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <label for="fm_usr"><?php echo lng('Username'); ?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="fm_pwd"><?php echo lng('Password'); ?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                            <label for="remember" class="custom-control-label"><?php echo lng('RememberMe'); ?></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block" role="button">
                                            <?php echo lng('Login'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="https://tinyfilemanager.github.io/" target="_blank" class="text-muted" data-version="<?php echo VERSION; ?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        fm_show_footer_login();
        exit;
    }
}

// update root path
if ($use_auth && isset($_SESSION[FM_SESSION_ID]['logged'])) {
    $root_path = isset($directories_users[$_SESSION[FM_SESSION_ID]['logged']]) ? $directories_users[$_SESSION[FM_SESSION_ID]['logged']] : $root_path;
}

// clean and check $root_path
$root_path = rtrim($root_path, '\\/');
$root_path = str_replace('\\', '/', $root_path);
if (!@is_dir($root_path)) {
    echo "<h1>Root path \"{$root_path}\" not found!</h1>";
    exit;
}

defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $show_hidden_files);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $root_path);
defined('FM_LANG') || define('FM_LANG', $lang);
defined('FM_EXTENSION') || define('FM_EXTENSION', $allowed_extensions);
define('FM_READONLY', $use_auth && !empty($readonly_users) && isset($_SESSION[FM_SESSION_ID]['logged']) && in_array($_SESSION[FM_SESSION_ID]['logged'], $readonly_users));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');

// always use ?p=
if (!isset($_GET['p']) && empty($_FILES)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get path
$p = isset($_GET['p']) ? $_GET['p'] : (isset($_POST['p']) ? $_POST['p'] : '');

// clean path
$p = fm_clean_path($p);

// for ajax request - save
$input = file_get_contents('php://input');
$_POST = (strpos($input, 'ajax') != FALSE && strpos($input, 'save') != FALSE) ? json_decode($input, true) : $_POST;

// instead globals vars
define('FM_PATH', $p);
define('FM_USE_AUTH', $use_auth);
define('FM_EDIT_FILE', $edit_files);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $iconv_input_encoding);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $use_highlightjs);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $highlightjs_style);
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $datetime_format);

unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style);

/*************************** ACTIONS ***************************/

// AJAX Request
if (isset($_POST['ajax']) && !FM_READONLY) {

    // save
    if (isset($_POST['type']) && $_POST['type'] == "save") {
        // get current path
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        // check path
        if (!is_dir($path)) {
            fm_redirect(FM_SELF_URL . '?p=');
        }
        $file = $_GET['edit'];
        $file = fm_clean_path($file);
        $file = str_replace('/', '', $file);
        if ($file == '' || !is_file($path . '/' . $file)) {
            fm_set_msg('File not found', 'error');
            fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
        }
        header('X-XSS-Protection:0'); 
        $file_path = $path . '/' . $file;
        
        $writedata = $_POST['content'];
        $fd = fopen($file_path, "w");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg('successful save!', 'alert');
        die(true);
    }
    
    // backup files
    if (isset($_POST['type']) && $_POST['type'] == "backup") {
        $file = $_POST['file'];
        $path = $_POST['path'];
        $date = date("dMy-His");
        $newFile = $file . '-' . $date . '.bak';
        copy($path . '/' . $file, $path . '/' . $newFile) or die("Unable to backup");
        echo "Backup $newFile Created";
    }

    // Save Config
    if (isset($_POST['type']) && $_POST['type'] == "settings") {
        global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_Cols, $calc_folder;
        $newLng = $_POST['js-language'];
        fm_get_translations([]);
        if (!array_key_exists($newLng, $lang_list)) {
            $newLng = 'en';
        }

        $erp = isset($_POST['js-error-report']) && $_POST['js-error-report'] == "true" ? true : false;
        $shf = isset($_POST['js-show-hidden']) && $_POST['js-show-hidden'] == "true" ? true : false;
        $hco = isset($_POST['js-hide-cols']) && $_POST['js-hide-cols'] == "true" ? true : false;
        $caf = isset($_POST['js-calc-folder']) && $_POST['js-calc-folder'] == "true" ? true : false;

        if ($cfg->data['lang'] != $newLng) {
            $cfg->data['lang'] = $newLng;
            $lang = $newLng;
        }
        if ($cfg->data['error_reporting'] != $erp) {
            $cfg->data['error_reporting'] = $erp;
            $report_errors = $erp;
        }
        if ($cfg->data['show_hidden'] != $shf) {
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data['show_hidden'] != $shf) {
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data['hide_Cols'] != $hco) {
            $cfg->data['hide_Cols'] = $hco;
            $hide_Cols = $hco;
        }
        if ($cfg->data['calc_folder'] != $caf) {
            $cfg->data['calc_folder'] = $caf;
            $calc_folder = $caf;
        }
        $cfg->save();
        echo true;
    }

    // new password hash
    if (isset($_POST['type']) && $_POST['type'] == "pwdhash") {
        $res = isset($_POST['inputPassword2']) && !empty($_POST['inputPassword2']) ? password_hash($_POST['inputPassword2'], PASSWORD_DEFAULT) : '';
        echo $res;
    }

    //upload using url
    if(isset($_POST['type']) && $_POST['type'] == "upload" && !empty($_REQUEST["uploadurl"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }

        $url = !empty($_REQUEST["uploadurl"]) && preg_match("|^http(s)?://.+$|", stripslashes($_REQUEST["uploadurl"])) ? stripslashes($_REQUEST["uploadurl"]) : null;
        $use_curl = false;
        $temp_file = tempnam(sys_get_temp_dir(), "upload-");
        $fileinfo = new stdClass();
        $fileinfo->name = trim(basename($url), ".\x00..\x20");

        function event_callback ($message) {
            global $callback;
            echo json_encode($message);
        }

        function get_file_path () {
            global $path, $fileinfo, $temp_file;
            return $path."/".basename($fileinfo->name);
        }

        $err = false;
        if (!$url) {
            $success = false;
        } else if ($use_curl) {
            @$fp = fopen($temp_file, "w");
            @$ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOPROGRESS, false );
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            @$success = curl_exec($ch);
            $curl_info = curl_getinfo($ch);
            if (!$success) {
                $err = array("message" => curl_error($ch));
            }
            @curl_close($ch);
            fclose($fp);
            $fileinfo->size = $curl_info["size_download"];
            $fileinfo->type = $curl_info["content_type"];
        } else {
            $ctx = stream_context_create();
            @$success = copy($url, $temp_file, $ctx);
            if (!$success) {
                $err = error_get_last();
            }
        }

        if ($success) {
            $success = rename($temp_file, get_file_path());
        }

        if ($success) {
            event_callback(array("done" => $fileinfo));
        } else {
            unlink($temp_file);
            if (!$err) {
                $err = array("message" => "Invalid url parameter");
            }
            event_callback(array("fail" => $err));
        }
    }

    exit();
}

// Delete file / folder
if (isset($_GET['del']) && !FM_READONLY) {
    $del = str_replace( '/', '', fm_clean_path( $_GET['del'] ) );
    if ($del != '' && $del != '..' && $del != '.') {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        $is_dir = is_dir($path . '/' . $del);
        if (fm_rdelete($path . '/' . $del)) {
            $msg = $is_dir ? lng('Folder <b>%s</b> deleted') : lng('File <b>%s</b> deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)));
        } else {
            $msg = $is_dir ? lng('Folder <b>%s</b> not deleted') : lng('File <b>%s</b> not deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)), 'error');
        }
    } else {
        fm_set_msg('Wrong file or folder name', 'error');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Create folder
if (isset($_GET['new']) && isset($_GET['type']) && !FM_READONLY) {
    $type = $_GET['type'];
    $new = str_replace( '/', '', fm_clean_path( strip_tags( $_GET['new'] ) ) );
    if ($new != '' && $new != '..' && $new != '.') {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        if ($_GET['type'] == "file") {
            if (!file_exists($path . '/' . $new)) {
                @fopen($path . '/' . $new, 'w') or die('Cannot open file:  ' . $new);
                fm_set_msg(sprintf('File <b>%s</b> created', fm_enc($new)));
            } else {
                fm_set_msg(sprintf('File <b>%s</b> already exists', fm_enc($new)), 'alert');
            }
        } else {
            if (fm_mkdir($path . '/' . $new, false) === true) {
                fm_set_msg(sprintf('Folder <b>%s</b> created', $new));
            } elseif (fm_mkdir($path . '/' . $new, false) === $path . '/' . $new) {
                fm_set_msg(sprintf('Folder <b>%s</b> already exists', fm_enc($new)), 'alert');
            } else {
                fm_set_msg(sprintf('Folder <b>%s</b> not created', fm_enc($new)), 'error');
            }
        }
    } else {
        fm_set_msg('Wrong folder name', 'error');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Copy folder / file
if (isset($_GET['copy'], $_GET['finish']) && !FM_READONLY) {
    // from
    $copy = $_GET['copy'];
    $copy = fm_clean_path($copy);
    // empty path
    if ($copy == '') {
        fm_set_msg('Source path not defined', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }
    // abs path from
    $from = FM_ROOT_PATH . '/' . $copy;
    // abs path to
    $dest = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $dest .= '/' . FM_PATH;
    }
    $dest .= '/' . basename($from);
    // move?
    $move = isset($_GET['move']);
    // copy/move
    if ($from != $dest) {
        $msg_from = trim(FM_PATH . '/' . basename($from), '/');
        if ($move) {
            $rename = fm_rename($from, $dest);
            if ($rename) {
                fm_set_msg(sprintf('Moved from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } elseif ($rename === null) {
                fm_set_msg('File or folder with this path already exists', 'alert');
            } else {
                fm_set_msg(sprintf('Error while moving from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        } else {
            if (fm_rcopy($from, $dest)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        }
    } else {
        fm_set_msg('Paths must be not equal', 'alert');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Mass copy files/ folders
if (isset($_POST['file'], $_POST['copy_to'], $_POST['finish']) && !FM_READONLY) {
    // from
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // to
    $copy_to_path = FM_ROOT_PATH;
    $copy_to = fm_clean_path($_POST['copy_to']);
    if ($copy_to != '') {
        $copy_to_path .= '/' . $copy_to;
    }
    if ($path == $copy_to_path) {
        fm_set_msg('Paths must be not equal', 'alert');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }
    if (!is_dir($copy_to_path)) {
        if (!fm_mkdir($copy_to_path, true)) {
            fm_set_msg('Unable to create destination folder', 'error');
            fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
        }
    }
    // move?
    $move = isset($_POST['move']);
    // copy/move
    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                // abs path from
                $from = $path . '/' . $f;
                // abs path to
                $dest = $copy_to_path . '/' . $f;
                // do
                if ($move) {
                    $rename = fm_rename($from, $dest);
                    if ($rename === false) {
                        $errors++;
                    }
                } else {
                    if (!fm_rcopy($from, $dest)) {
                        $errors++;
                    }
                }
            }
        }
        if ($errors == 0) {
            $msg = $move ? 'Selected files and folders moved' : 'Selected files and folders copied';
            fm_set_msg($msg);
        } else {
            $msg = $move ? 'Error while moving items' : 'Error while copying items';
            fm_set_msg($msg, 'error');
        }
    } else {
        fm_set_msg('Nothing selected', 'alert');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Rename
if (isset($_GET['ren'], $_GET['to']) && !FM_READONLY) {
    // old name
    $old = $_GET['ren'];
    $old = fm_clean_path($old);
    $old = str_replace('/', '', $old);
    // new name
    $new = $_GET['to'];
    $new = fm_clean_path(strip_tags($new));
    $new = str_replace('/', '', $new);
    // path
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // rename
    if ($old != '' && $new != '') {
        if (fm_rename($path . '/' . $old, $path . '/' . $new)) {
            fm_set_msg(sprintf('Renamed from <b>%s</b> to <b>%s</b>', fm_enc($old), fm_enc($new)));
        } else {
            fm_set_msg(sprintf('Error while renaming from <b>%s</b> to <b>%s</b>', fm_enc($old), fm_enc($new)), 'error');
        }
    } else {
        fm_set_msg('Names not set', 'error');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Download
if (isset($_GET['dl'])) {
    $dl = $_GET['dl'];
    $dl = fm_clean_path($dl);
    $dl = str_replace('/', '', $dl);
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    if ($dl != '' && is_file($path . '/' . $dl)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($path . '/' . $dl) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Connection: Keep-Alive');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path . '/' . $dl));
        ob_end_clean();
        readfile($path . '/' . $dl);
        exit;
    } else {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }
}

// Upload
if (!empty($_FILES) && !FM_READONLY) {
    $override_file_name = false;
    $f = $_FILES;
    $path = FM_ROOT_PATH;
    $ds = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $uploads = 0;
    $allowed = (FM_EXTENSION) ? explode(',', FM_EXTENSION) : false;

    $filename = $f['file']['name'];
    $tmp_name = $f['file']['tmp_name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); #202
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    $targetPath = $path . $ds;
    $fullPath = $path . '/' . $_REQUEST['fullpath'];
    $folder = substr($fullPath, 0, strrpos($fullPath, "/"));

    if(file_exists ($fullPath) && !$override_file_name) {
        $ext_1 = $ext ? '.'.$ext : '';
        $fullPath = str_replace($ext_1, '', $fullPath) .'_'. date('ymdHis'). $ext_1;
    }

    if (!is_dir($folder)) {
        $old = umask(0);
        mkdir($folder, 0777, true);
        umask($old);
    }

    if (empty($f['file']['error']) && !empty($tmp_name) && $tmp_name != 'none' && $isFileAllowed) {
        if (move_uploaded_file($tmp_name, $fullPath)) {
            die('Successfully uploaded');
        } else {
            die(sprintf('Error while uploading files. Uploaded files: %s', $uploads));
        }
    }
    exit();
}

// Mass deleting
if (isset($_POST['group'], $_POST['delete']) && !FM_READONLY) {
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $new_path = $path . '/' . $f;
                if (!fm_rdelete($new_path)) {
                    $errors++;
                }
            }
        }
        if ($errors == 0) {
            fm_set_msg('Selected files and folder deleted');
        } else {
            fm_set_msg('Error while deleting items', 'error');
        }
    } else {
        fm_set_msg('Nothing selected', 'alert');
    }

    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Pack files
if (isset($_POST['group']) && (isset($_POST['zip']) || isset($_POST['tar'])) && !FM_READONLY) {
    $path = FM_ROOT_PATH;
    $ext = 'zip';
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    //set pack type
    $ext = isset($_POST['tar']) ? 'tar' : 'zip';


    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg('Operations with archives are not available', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    $files = $_POST['file'];
    if (!empty($files)) {
        chdir($path);

        if (count($files) == 1) {
            $one_file = reset($files);
            $one_file = basename($one_file);
            $zipname = $one_file . '_' . date('ymd_His') . '.'.$ext;
        } else {
            $zipname = 'archive_' . date('ymd_His') . '.'.$ext;
        }

        if($ext == 'zip') {
            $zipper = new FM_Zipper();
            $res = $zipper->create($zipname, $files);
        } elseif ($ext == 'tar') {
            $tar = new FM_Zipper_Tar();
            $res = $tar->create($zipname, $files);
        }

        if ($res) {
            fm_set_msg(sprintf('Archive <b>%s</b> created', fm_enc($zipname)));
        } else {
            fm_set_msg('Archive not created', 'error');
        }
    } else {
        fm_set_msg('Nothing selected', 'alert');
    }

    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Unpack
if (isset($_GET['unzip']) && !FM_READONLY) {
    $unzip = $_GET['unzip'];
    $unzip = fm_clean_path($unzip);
    $unzip = str_replace('/', '', $unzip);
    $isValid = false;

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    if ($unzip != '' && is_file($path . '/' . $unzip)) {
        $zip_path = $path . '/' . $unzip;
        $ext = strtolower(pathinfo($zip_path, PATHINFO_EXTENSION)); #202
        $isValid = true;
    } else {
        fm_set_msg('File not found', 'error');
    }


    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg('Operations with archives are not available', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    if ($isValid) {
        //to folder
        $tofolder = '';
        if (isset($_GET['tofolder'])) {
            $tofolder = pathinfo($zip_path, PATHINFO_FILENAME);
            if (fm_mkdir($path . '/' . $tofolder, true)) {
                $path .= '/' . $tofolder;
            }
        }

        if($ext == "zip") {
            $zipper = new FM_Zipper();
            $res = $zipper->unzip($zip_path, $path);
        } elseif ($ext == "tar") {
            $gzipper = new PharData($zip_path);
            $res = $gzipper->extractTo($path);
        }

        if ($res) {
            fm_set_msg('Archive unpacked');
        } else {
            fm_set_msg('Archive not unpacked', 'error');
        }

    } else {
        fm_set_msg('File not found', 'error');
    }
    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

// Change Perms (not for Windows)
if (isset($_POST['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $file = $_POST['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    $mode = 0;
    if (!empty($_POST['ur'])) {
        $mode |= 0400;
    }
    if (!empty($_POST['uw'])) {
        $mode |= 0200;
    }
    if (!empty($_POST['ux'])) {
        $mode |= 0100;
    }
    if (!empty($_POST['gr'])) {
        $mode |= 0040;
    }
    if (!empty($_POST['gw'])) {
        $mode |= 0020;
    }
    if (!empty($_POST['gx'])) {
        $mode |= 0010;
    }
    if (!empty($_POST['or'])) {
        $mode |= 0004;
    }
    if (!empty($_POST['ow'])) {
        $mode |= 0002;
    }
    if (!empty($_POST['ox'])) {
        $mode |= 0001;
    }

    if (@chmod($path . '/' . $file, $mode)) {
        fm_set_msg('Permissions changed');
    } else {
        fm_set_msg('Permissions not changed', 'error');
    }

    fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
}

/*************************** /ACTIONS ***************************/

// get current path
$path = FM_ROOT_PATH;
if (FM_PATH != '') {
    $path .= '/' . FM_PATH;
}

// check path
if (!is_dir($path)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get parent folder
$parent = fm_get_parent_path(FM_PATH);

$objects = is_readable($path) ? scandir($path) : array();
$folders = array();
$files = array();
if (is_array($objects)) {
    foreach ($objects as $file) {
        if ($file == '.' || $file == '..' && in_array($file, $GLOBALS['exclude_items'])) {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($file, 0, 1) === '.') {
            continue;
        }
        $new_path = $path . '/' . $file;
        if (@is_file($new_path) && !in_array($file, $GLOBALS['exclude_items'])) {
            $files[] = $file;
        } elseif (@is_dir($new_path) && $file != '.' && $file != '..' && !in_array($file, $GLOBALS['exclude_items'])) {
            $folders[] = $file;
        }
    }
}

if (!empty($files)) {
    natcasesort($files);
}
if (!empty($folders)) {
    natcasesort($folders);
}

// upload form
if (isset($_GET['upload']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    ?>

    <link href="cdn/dropzone.min.css" rel="stylesheet">
    <!-- Dropzone.prototype.defaultOptions.dictDefaultMessage = " lng('Drop files here to upload') "; // Translate // Where to place? -->
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="far fa-arrow-alt-circle-up"></i> <?php echo lng('UploadingFiles'); // Translate ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link colrLnk"></i> <?php echo lng('Upload from URL'); // Translate ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back')?></a>
                    <?php echo lng('DestinationFolder') ?>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
                </p>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?p=' . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo fm_enc(FM_PATH) ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="form-inline" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <button type="submit" class="btn btn-primary ml-3"><?php echo lng('Upload') ?></button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="cdn/dropzone.min.js"></script>
    <?php $dropMsg = lng('Drop files here to upload').'<br>'.lng('Maximum file upload size').': '.MAX_UPLOAD_SIZE.' MB'; // EV-soft ?>
    <script>
        Dropzone.options.fileUploader = {
            timeout: 120000,
            maxFilesize: <?php echo MAX_UPLOAD_SIZE; ?>,
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        alert('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    console.log('Upload Status >> ', res.status);
                }).on("error", function(file, response) {
                    alert(response);
                });
            }
        }
        var dropMsg  = "<?php echo $dropMsg; ?>";
        Dropzone.prototype.defaultOptions.dictDefaultMessage = dropMsg;
    </script>
    <?php
    fm_show_footer();
    exit;
}

// copy form POST
if (isset($_POST['copy']) && !FM_READONLY) {
    $copy_files = $_POST['file'];
    if (!is_array($copy_files) || empty($copy_files)) {
        fm_set_msg('Nothing selected', 'alert');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    ?>
    <div class="path">
        <div class="card">
            <div class="card-header">
                <h6><?php echo lng('Copying') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php
                    foreach ($copy_files as $cf) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($cf) . '">' . PHP_EOL;
                    }
                    ?>
                    <p class="break-word"><?php echo lng('Files') ?>: <b><?php echo implode('</b>, <b>', $copy_files) ?></b></p>
                    <p class="break-word"><?php echo lng('SourceFolder') ?>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><?php echo lng('DestinationFolder') ?>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label" style="vertical-align: sub"> <?php echo lng('Move') ?></label></p>
                    <p>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Copy') ?></button> &nbsp;
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// copy form
if (isset($_GET['copy']) && !isset($_GET['finish']) && !FM_READONLY) {
    $copy = $_GET['copy'];
    $copy = fm_clean_path($copy);
    if ($copy == '' || !file_exists(FM_ROOT_PATH . '/' . $copy)) {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    ?>
    <div class="path">
        <p><b><?php echo lng('Copying'); //translate ?></b></p>
        <p class="break-word">
            <?php echo lng('Source path'); //translate ?>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $copy)) ?><br>
            <?php echo lng('DestinationFolder'); //translate ?>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1"><i class="fa fa-check-circle"></i> <?php echo lng('Copy'); //translate ?></a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> <?php echo lng('Move'); //translate ?></a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel'); //translate ?></a></b>
        </p>
        <p><i><?php echo lng('Select folder'); //translate ?></i></p>
        <ul class="folders break-word">
            <?php
            if ($parent !== false) {
                ?>
                <li><a href="?p=<?php echo urlencode($parent) ?>&amp;copy=<?php echo urlencode($copy) ?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php
            }
            foreach ($folders as $f) {
                ?>
                <li>
                    <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>&amp;copy=<?php echo urlencode($copy) ?>"><i class="fas fa-folder"></i> <?php echo fm_convert_win($f) ?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <?php
    fm_show_footer();
    exit;
}

if (isset($_GET['settings']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang, $lang_list;
    ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2">
            <h6 class="card-header">
                <i class="fa fa-cog"></i>  <?php echo lng('Settings') ?>
                <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-window-close"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php echo lng('Language') ?></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="js-language" name="js-language">
                                <?php
                                function getSelected($l) {
                                    global $lang;
                                    return ($lang == $l) ? 'selected' : '';
                                }
                                foreach ($lang_list as $k => $v) {
                                    echo "<option value='$k' ".getSelected($k).">$v</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php
                    //get ON/OFF and active class
                    function getChecked($conf, $val, $txt) {
                        if($conf== 1 && $val ==1) {
                            return $txt;
                        } else if($conf == '' && $val == '') {
                            return $txt;
                        } else {
                            return '';
                        }
                    }
                    ?>
                    <div class="form-group row">
                        <label for="js-err-rpt-1" class="col-sm-3 col-form-label"><?php echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php echo getChecked($report_errors, 1, 'active') ?>">
                                    <input type="radio" name="js-error-report" id="js-err-rpt-1" autocomplete="off" value="true" <?php echo getChecked($report_errors, 1, 'checked') ?> > ON
                                </label>
                                <label class="btn btn-secondary <?php echo getChecked($report_errors, '', 'active') ?>">
                                    <input type="radio" name="js-error-report" id="js-err-rpt-0" autocomplete="off" value="false" <?php echo getChecked($report_errors, '', 'checked') ?> > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-hdn-1" class="col-sm-3 col-form-label"><?php echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php echo getChecked($show_hidden_files, 1, 'active') ?>">
                                    <input type="radio" name="js-show-hidden" id="js-hdn-1" autocomplete="off" value="true" <?php echo getChecked($show_hidden_files, 1, 'checked') ?> > ON
                                </label>
                                <label class="btn btn-secondary <?php echo getChecked($show_hidden_files, '', 'active') ?>">
                                    <input type="radio" name="js-show-hidden" id="js-hdn-0" autocomplete="off" value="false" <?php echo getChecked($show_hidden_files, '', 'checked') ?> > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-hid-1" class="col-sm-3 col-form-label"><?php echo lng('HideColumns') ?></label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php echo getChecked($hide_Cols, 1, 'active') ?>">
                                    <input type="radio" name="js-hide-cols" id="js-hid-1" autocomplete="off" value="true" <?php echo getChecked($hide_Cols, 1, 'checked') ?> > ON
                                </label>
                                <label class="btn btn-secondary <?php echo getChecked($hide_Cols, '', 'active') ?>">
                                    <input type="radio" name="js-hide-cols" id="js-hid-0" autocomplete="off" value="false" <?php echo getChecked($hide_Cols, '', 'checked') ?> > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-dir-1" class="col-sm-3 col-form-label"><?php echo lng('CalculateFolderSize') ?></label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php echo getChecked($calc_folder, 1, 'active') ?>">
                                    <input type="radio" name="js-calc-folder" id="js-dir-1" autocomplete="off" value="true" <?php echo getChecked($calc_folder, 1, 'checked') ?> > ON
                                </label>
                                <label class="btn btn-secondary <?php echo getChecked($calc_folder, '', 'active') ?>">
                                    <input type="radio" name="js-calc-folder" id="js-dir-0" autocomplete="off" value="false" <?php echo getChecked($calc_folder, '', 'checked') ?> > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php echo lng('Save'); ?></button>
                        </div>
                    </div>
                    <?php scannLngStrings($lang); // EV-soft 
                      $langList= langList();      // arrPrint($langList,'$langList');
                      //SelNew(langList());       // Not good
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

if (isset($_GET['help'])) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang;
    ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2">
            <h6 class="card-header">
                <i class="fa fa-exclamation-circle"></i> <?php echo lng('Help') ?>
                <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-window-close"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> <?php echo APP_TITLE;  echo ' '.VERSION; // TransMore ?></a></h3></p>
                        <p><?php echo lng('Author'); //translate ?>: Prasath Mani</p>
                        <p><?php echo lng('Mail Us'); //translate ?>: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers[at]gmail.com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://tinyfilemanager.github.io/" target="_blank"><i class="fa fa-question-circle"></i> <?php echo lng('Help Documents') ?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa fa-bug"></i> <?php echo lng('Report Issue') ?></a></li>
                                <li class="list-group-item"><a href="javascript:latest_release_info('<?php echo VERSION; ?>');" target="_blank"><i class="fa fa-link colrLnk"> </i> <?php echo lng('Check Latest Version') ?></a></li>
                                <?php if(!FM_READONLY) { ?>
                                <li class="list-group-item"><a href="javascript:show_new_pwd();" target="_blank"><i class="fa fa-lock"></i> <?php echo lng('Generate new password hash') ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo lng('Password') ?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo lng('Generate') ?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// file viewer
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    $quickView = (isset($_GET['quickView']) && $_GET['quickView'] == 1) ? true : false;
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || in_array($file, $GLOBALS['exclude_items'])) {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    if(!$quickView) {
        fm_show_header(); // HEADER
        fm_show_nav_path(FM_PATH); // current path
    }

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = fm_get_filesize(filesize($file_path));

    $is_zip = false;
    $is_gzip = false;
    $is_image = false;
    $is_audio = false;
    $is_video = false;
    $is_text = false;
    $is_onlineViewer = false;

    $view_title = lng('File'); //translate
    $filenames = false; // for zip
    $content = ''; // for text
    $online_viewer = strtolower($GLOBALS['online_viewer']);

    if($online_viewer && $online_viewer !== 'false' && in_array($ext, fm_get_onlineViewer_exts())){ // EV-soft
        $is_onlineViewer = true;
    }
    elseif ($ext == 'zip' || $ext == 'tar') {
        $is_zip = true;
        $view_title = lng('Archive'); // Translate
        $filenames = fm_get_zif_info($file_path, $ext);
    } elseif (in_array($ext, fm_get_image_exts())) {
        $is_image = true;
        $view_title = lng('Image'); // Translate
    } elseif (in_array($ext, fm_get_audio_exts())) {
        $is_audio = true;
        $view_title = lng('Audio'); // Translate
    } elseif (in_array($ext, fm_get_video_exts())) {
        $is_video = true;
        $view_title = lng('Video'); // Translate
    } elseif (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

    ?>
    <div class="row">
        <div class="col-12">
            <?php if(!$quickView) { ?>
                <p class="break-word"><b><?php echo $view_title ?> "<?php echo fm_enc(fm_convert_win($file)) ?>"</b></p>
                <p class="break-word">
                    <?php echo lng('Full path').': '. fm_enc(fm_convert_win($file_path)); // Translate ?><br>
                    <?php echo lng('File size').': '. fm_get_filesize($filesize); // Translate ?><?php if ($filesize >= 1000): ?> (<?php echo sprintf( '%s bytes', $filesize) ?>)<?php endif; ?>
                    <br>
                    MIME-type: <?php echo $mime_type ?><br>
                    <?php
                    // ZIP info
                    if (($is_zip || $is_gzip) && $filenames !== false) {
                        $total_files = 0;
                        $total_comp = 0;
                        $total_uncomp = 0;
                        foreach ($filenames as $fn) {
                            if (!$fn['folder']) {
                                $total_files++;
                            }
                            $total_comp += $fn['compressed_size'];
                            $total_uncomp += $fn['filesize'];
                        }
                        ?>
                        <?php echo lng('Files in archive').': '.  $total_files; //translate ?><br>
                        <?php echo lng('Total size').': '.  fm_get_filesize($total_uncomp); //translate ?><br>
                        <?php echo lng('Size in archive').': '.  fm_get_filesize($total_comp); //translate ?><br>
                        <?php echo lng('Compression').': '.  round(($total_comp / $total_uncomp) * 100); //translate ?>%<br>
                        <?php
                    }
                    // Image info
                    if ($is_image) {
                        $image_size = getimagesize($file_path);
                        echo lng('Image sizes') .': '. (isset($image_size[0]) ? $image_size[0] : '0') . ' x ' . (isset($image_size[1]) ? $image_size[1] : '0') . '<br>'; //translate
                    }
                    // Text info
                    if ($is_text) {
                        $is_utf8 = fm_is_utf8($content);
                        if (function_exists('iconv')) {
                            if (!$is_utf8) {
                                $content = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $content);
                            }
                        }
                        echo 'Charset: ' . ($is_utf8 ? 'utf-8' : '8 bit') . '<br>';
                    }
                    ?>
                </p>
                <p>
                    <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($file) ?>"><i class="fa fa-cloud-download colrDwn"></i> <?php echo lng('Download') ?></a></b> &nbsp;
                    <b><a href="<?php echo fm_enc($file_url) ?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php echo lng('Open') ?></a></b>
                    &nbsp;
                    <?php
                    // ZIP actions
                    if (!FM_READONLY && ($is_zip || $is_gzip) && $filenames !== false) {
                        $zip_name = pathinfo($file_path, PATHINFO_FILENAME);
                        ?>
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;unzip=<?php echo urlencode($file) ?>"><i class="fa fa-check-circle"></i> <?php echo lng('UnZip') ?></a></b> &nbsp;
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;unzip=<?php echo urlencode($file) ?>&amp;tofolder=1" title="<?php echo lng('UnZip to'); echo fm_enc($zip_name); // TransMore ?>"><i class="fa fa-check-circle"></i>
                                <?php echo lng('UnZipToFolder') ?></a></b> &nbsp;
                        <?php
                    }
                    if ($is_text && !FM_READONLY) {
                        ?>
                        <b><a href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>" class="edit-file"><i class="fa fa-pencil-square"></i> <?php echo lng('Edit') ?>
                            </a></b> &nbsp;
                        <b><a href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&env=ace"
                              class="edit-file"><i class=" far fa-edit colrEdi"></i> <?php echo lng('AdvancedEditor') ?>
                            </a></b> &nbsp;
                    <?php } ?>
                    <b><a href="?p=<?php echo urlencode(FM_PATH) ?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back') ?></a></b>
                </p>
                <?php
            }
            if($is_onlineViewer) {
                if($online_viewer == 'google') {
                    echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                } else if($online_viewer == 'microsoft') {
                    echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                }
            } elseif ($is_zip) {
                // ZIP content
                if ($filenames !== false) {
                    echo lng('Content').':<br>';  //  EV-soft
                    echo '<code class="maxheight">';
                    archList($fn,'Head');
                    foreach ($filenames as $fn) {
                        if ($fn['folder']) {
                            // echo '<b>' . fm_enc($fn['name']) . '</b><br>';
                            archList($fn,'Body');   // EV-soft
                        } else {
                            // echo $fn['name'] . ' (Size: ' . fm_get_filesize($fn['filesize']).' Time: '.date(FM_DATETIME_FORMAT, $fn['filetime']) . ')<br>'; // EV-soft
                            archList($fn,'Body');   // EV-soft
                        }
                    }
                    echo '</code>';
                    archList($fn,'Foot');
                } else {
                    echo '<p>Error while fetching archive info</p>';
                }
            } elseif ($is_image) {
                // Image content
                if (in_array($ext, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg'))) {
                    echo '<p><img src="' . fm_enc($file_url) . '" alt="" class="preview-img"></p>';
                }
            } elseif ($is_audio) {
                // Audio content
                echo '<p><audio src="' . fm_enc($file_url) . '" controls preload="metadata"></audio></p>';
            } elseif ($is_video) {
                // Video content
                echo '<div class="preview-video"><video src="' . fm_enc($file_url) . '" width="640" height="360" controls preload="metadata"></video></div>';
            } elseif ($is_text) {
                if (FM_USE_HIGHLIGHTJS) {
                    // highlight
                    $hljs_classes = array(
                        'shtml' => 'xml',
                        'htaccess' => 'apache',
                        'phtml' => 'php',
                        'lock' => 'json',
                        'svg' => 'xml',
                    );
                    $hljs_class = isset($hljs_classes[$ext]) ? 'lang-' . $hljs_classes[$ext] : 'lang-' . $ext;
                    if (empty($ext) || in_array(strtolower($file), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $file)) {
                        $hljs_class = 'nohighlight';
                    }
                    $content = '<pre class="with-hljs"><code class="' . $hljs_class . '">' . fm_enc($content) . '</code></pre>';
                } elseif (in_array($ext, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                    // php highlight
                    $content = highlight_string($content, true);
                } else {
                    $content = '<pre>' . fm_enc($content) . '</pre>';
                }
                echo $content;
            }
            ?>
        </div>
    </div>
    <?php
    if(!$quickView) {
        fm_show_footer();
    }
    exit;
}

// file editor
if (isset($_GET['edit'])) {
    $file = $_GET['edit'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file)) {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }
    $editFile = ' : <i><b>'. $file. '</b></i>'; // Current file in editor. ## EV-soft
    header('X-XSS-Protection:0');
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    // normal editer
    $isNormalEditor = true;
    if (isset($_GET['env'])) {
        if ($_GET['env'] == "ace") {
            $isNormalEditor = false;
        }
    }

    // Save File
    if (isset($_POST['savedata'])) {
        $writedata = $_POST['savedata'];
        $fd = fopen($file_path, "w");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg('File Saved Successfully');
    }

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = filesize($file_path);
    $is_text = false;
    $content = ''; // for text

    if (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

    ?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if (!$isNormalEditor) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo lng('Fullscreen'); // TransMore ?>"><i class="fa fa-expand" title="<?php echo lng('Fullscreen'); // TransMore ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo lng('Search'); // TransMore ?>"><i class="fa fa-search" title="<?php echo lng('Search'); // TransMore ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo lng('Undo'); // TransMore ?>"><i class="fa fa-undo" title="<?php echo lng('Undo'); // TransMore ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo lng('Redo'); // TransMore ?>"><i class="fa fa-repeat" title="<?php echo lng('Redo'); // TransMore ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo lng('Word Wrap'); // TransMore ?>"><i class="fa fa-text-width" title="<?php echo lng('Word Wrap'); // TransMore ?>"></i></button>
                            <button data-cmd="none" data-option="help" class="btn btn-sm btn-outline-secondary" id="js-ace-goLine" title="<?php echo lng('Help'); // TransMore ?>"><i class="fa fa-question" title="<?php echo lng('Help'); // TransMore ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo lng('Select Document Type'); // TransMore ?>" class="btn-outline-secondary border-left-0 d-none d-md-block"><option>-- <?php echo lng('Select Mode'); // TransMore ?> --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo lng('Select Theme'); // TransMore ?>" class="btn-outline-secondary border-left-0 d-none d-lg-block"><option>-- <?php echo lng('Select Theme'); // TransMore ?> --</option></select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-right pt-1">
                <a title="<?php echo lng('Back'); // TransMore ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php echo urlencode($file) ?>"><i class="fa fa-reply-all"></i> <?php echo lng('Back') ?></a>
                <a title="<?php echo lng('BackUp'); // TransMore ?>" class="btn btn-sm btn-outline-primary" href="javascript:backup('<?php echo urlencode($path); ?>','<?php echo urlencode($file); ?>')"><i class="fa fa-database"></i> <?php echo lng('BackUp'); ?></a>
                <?php if ($is_text) { ?>
                    <?php if ($isNormalEditor) { ?>
                        <a title="<?php echo lng('Advanced'); // TransMore ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&amp;env=ace"><i class="far fa-edit colrEdi"></i> <?php echo lng('AdvancedEditor') ?></a>
                        <button type="button" class="btn btn-sm btn-outline-primary name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save'); // TransMore ?>
                        </button>
                    <?php } else { ?>
                        <a title="<?php echo lng('Plain Editor'); // TransMore ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>"><i class="fa fa-text-height"></i> <?php echo lng('NormalEditor') ?></a>
                        <button type="button" class="btn btn-sm btn-outline-primary" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save') ?>
                        </button>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php
        if ($is_text && $isNormalEditor) {
            echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">' . htmlspecialchars($content) . '</textarea>';
        } elseif ($is_text) {
            echo '<div id="editor" contenteditable="true">' . htmlspecialchars($content) . '</div>';
        } else {
            fm_set_msg('FILE EXTENSION HAS NOT SUPPORTED', 'error');
        }
        ?>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// chmod (not for Windows)
if (isset($_GET['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $file = $_GET['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg('File not found', 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file;
    $file_path = $path . '/' . $file;

    $mode = fileperms($path . '/' . $file);

    ?>
    <div class="path">
        <div class="card mb-2">
            <h6 class="card-header">
                <?php echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    Full path: <?php echo $file_path ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($file) ?>">

                    <table class="table compact-table">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner') ?></b></td>
                            <td><b><?php echo lng('Group') ?></b></td>
                            <td><b><?php echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php echo ($mode & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php echo ($mode & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php echo ($mode & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php echo ($mode & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php echo ($mode & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php echo ($mode & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php echo ($mode & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php echo ($mode & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php echo ($mode & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Change') ?></button> &nbsp;
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

//--- FILEMANAGER MAIN
fm_show_header(); // HEADER
fm_show_nav_path(FM_PATH); // current path

if ($calc_folder) { // EV-soft
//echo '<script type="text/javascript"> $(document).ready(function(){ $(window).load(function(){ $(\'#spinner\').fadeOut(); }); }); </script>';
//  echo '<div class="center" id="spinner"> <i class="fa fa-cog fa-spin fa-3x fa-fw"></i><br>Calculating folder content takes time... </div>';
  //echo '<script>document.getElementById("spinner").style.display = "block"; </script>';
}

 // messages
fm_show_message();
 
$num_files = count($files);
$num_folders = count($folders);
$all_files_size = 0;
?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm bg-white table-striped" id="main-table">  <!-- EV-soft -->
            <thead class="thead-white">
            <tr>
                <?php if (!FM_READONLY): ?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items" title="<?php echo lng('Invert all'); // EV-soft ?>"></label>
                        </div>
                    </th><?php endif; ?>
                <th> <?php     // link to parent folder: Part of header because bootstrap can not use "unsort row"  //  EV-soft:
            if ($parent !== false) {
                if (!FM_READONLY): ?>
                    <span> <?php endif; ?>
                    <a data-title="<?php echo lng('Go to parent folder.')?>" href="?p=<?php echo urlencode($parent) ?>" ><i class="fa fa-chevron-circle-left go-back"></i> ..</a>&nbsp;&nbsp;</span>
          <?php } ?>
                    <?php echo lng('Name') ?></th>
                <th class="tblcol" title='Info about folder or File type'><?php echo lng('Info / Ext'); // EV-soft: Sort on extension.  ?></th>
                <th class="fsize"><?php echo lng('Size').'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; // EV-soft ?></th>
                <th class="tblcol"><?php echo lng('Modified') ?></th>
                <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                    <th class="tblcol"><?php echo lng('Perms') ?></th>
                    <th class="tblcol"><?php echo lng('Owner') ?></th><?php endif; ?>
                <th style="width:16%;"><?php echo lng('Actions') ?></th>
            </tr>
            </thead>
            <?php
            // link to parent folder moved to thead EV-soft
            $ii = 3399; //  folder checkbox id
            foreach ($folders as $f) {
                $is_link = is_link($path . '/' . $f);
                $ext = pathinfo($f, PATHINFO_EXTENSION); // EV-soft
                $img = $is_link ? 'icon-link_folder' : 'fas fa-folder';
                $foldinfo = fm_get_directorysize($path . '/' . $f); // EV-soft:
                if ($calc_folder==true) {
                $foldsize  = $foldinfo[0];
                $filecount = $foldinfo[1];
                $dir_count = $foldinfo[2];
                $ext= '<pre style="margin-bottom:0;"><i class="fas fa-folder"></i> '.str_pad($dir_count,4,' ').' <i class="far fa-file"></i> '.str_pad($filecount,4,' ').'</pre>';
                $foldhint = ' data-title="'.lng('Folder info').': '.$dir_count.' '.lng('folders').', '.$filecount.' '.lng('files').'. " ';
                } else 
                $foldhint = ' data-title="'.lng('Calculation of files in folder, is disabled').'" ';
                $sortsize = '<span style="display:none;">'.str_pad($foldsize, 18, "0", STR_PAD_LEFT).' </span>';
                $showsize = fm_get_filesize($foldsize); 
                $ftime = filemtime($path . '/' . $f); //  Sort criteria
                $sorttime = '<span style="display:none;">'.$ftime.'</span>';
                $modif = date(FM_DATETIME_FORMAT, $ftime);
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $owner = posix_getpwuid(fileowner($path . '/' . $f));
                    $group = posix_getgrgid(filegroup($path . '/' . $f));
                    $posix = 'Owner : Group'; // EV-soft more
                } else {
                    $owner = array('name' => '?');
                    $group = array('name' => '?');
                    $posix = 'PHP posix functions is not accessible!'; // EV-soft more
                }
                ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $ii ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                            <label class="custom-control-label" for="<?php echo $ii ?>"></label>
                        </div>
                        </td><?php endif; ?>
                    <td class="filename">
                        <a title="<?php echo lng('Go to folder'); // EV-soft ?>" href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="<?php echo $img. ' icon'; ?>"></i> <?php echo fm_convert_win($f) ?>
                        </a> <?php echo($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?>
                    </td>
                    <td class="tblcol"<?php echo $foldhint.'>'. $ext; // EV-soft: Sort on extension ?></td>
                    <td class="fsize" <?php echo $foldhint.'>'. $sortsize.$showsize; // EV-soft ?> </td>
                    <td class="tblcol"> <?php echo $sorttime.$modif ?> </td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td class="tblcol"><?php if (!FM_READONLY): ?><a data-title="<?php echo lng('Change Permissions'); // Translate ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td class="tblcol" data-title="<?php echo $posix; // EV-soft more ?>"><?php echo $owner['name'] . ':' . $group['name'] ?></td>
                    <?php endif; ?>
                    <td class="inline-actions"><?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete')?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="return confirm('<?php echo lng('Delete folder').': '.urlencode($f).' ?'; // EV-soft more ?>')"><i class="far fa-trash-alt colrEra" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('Rename')?>" href="#" onclick="rename('<?php echo fm_enc(FM_PATH) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="far fa-edit colrRen" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('CopyTo')?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="far fa-copy colrCpy" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink')?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f . '/') ?>" target="_blank"><i class="fa fa-link colrLnk" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
                flush();
                $ii++;
            }
            $ik = 6070; //  file checkbox id (add prefix? so none conflict with folder id)
            foreach ($files as $f) {
                $is_link = is_link($path . '/' . $f);
                $ext = pathinfo($f, PATHINFO_EXTENSION); // EV-soft
                $img = $is_link ? 'far fa-file-alt colr4' : fm_get_file_icon_class($path . '/' . $f);
                $ftime = filemtime($path . '/' . $f); //  Sort criteria EV-soft
                $modif = date(FM_DATETIME_FORMAT, $ftime); // EV-soft
                $filesize_raw = fm_get_size($path . '/' . $f);
                $sortsize = '<span style="display:none;">'.str_pad($filesize_raw, 18, "0", STR_PAD_LEFT).'</span>'; // EV-soft
                $showsize = fm_get_filesize($filesize_raw); 
                $sorttime = '<span style="display:none;">'.$ftime.'</span>'; // EV-soft
             // $showtime = date(FM_DATETIME_FORMAT, $ftime);;
                
                $filelink = '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($f);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $owner = posix_getpwuid(fileowner($path . '/' . $f));
                    $group = posix_getgrgid(filegroup($path . '/' . $f));
                    $posix = 'Owner : Group'; // EV-soft more
                } else {
                    $owner = array('name' => '?');
                    $group = array('name' => '?');
                    $posix = 'PHP posix functions is not accessible!'; // EV-soft more
                }
                ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $ik ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                            <label class="custom-control-label" for="<?php echo $ik ?>"></label>
                        </div>
                        </td><?php endif; ?>
                    <td>
                        <div><a href="<?php echo $filelink ?>" data-title="<?php echo lng('View file info'); // Translate ?>"><i class="<?php echo $img. ' icon'; // EV-soft ?>"></i> <?php echo fm_convert_win($f) ?>
                            </a><?php echo($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?></div>
                    </td>
                    <td class="tblcol"><?php echo $ext; // EV-soft: Sort on extension ?></td>
                    <td class="fsize"><span data-title="<?php printf( '%s bytes', number_format($filesize_raw)); // EV-soft ?>">
                        <?php echo $sortsize.$showsize; // EV-soft ?>
                        </span></td>
                    <td class="tblcol"><?php echo $sorttime.$modif // EV-soft ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td class="tblcol"><?php if (!FM_READONLY): ?><a data-title="<?php echo lng('Change Permissions') // Translate ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td class="tblcol" data-title="<?php echo $posix; // EV-soft more ?>"><?php echo fm_enc($owner['name'] . ':' . $group['name']) ?></td>
                    <?php endif; ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Preview') ?>" href="<?php echo $filelink.'&quickView=1'; ?>" data-toggle="lightbox" data-gallery="tiny-gallery" data-title="<?php echo fm_convert_win($f) ?>" data-max-width="100%" data-width="100%"><i class="fa fa-eye colrShw"></i></a>
                            <a title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f); ?>" onclick="return confirm('<?php echo lng('Delete').' '.lng('File').': '.urlencode($f).' ?'; // EV-soft more ?>')"><i class="far fa-trash-alt colrEra"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(FM_PATH) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="far fa-edit colrRen"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..."
                               href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="far fa-copy colrCpy"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f) ?>" target="_blank"><i class="fa fa-link colrLnk"></i></a>
                        <a title="<?php echo lng('Download') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($f) ?>"><i class="fa fa-download colrDwn"></i></a>
                    </td>
                </tr>
                <?php
                flush();
                $ik++;
            }

            if (empty($folders) && empty($files)) {
                ?>
                <tfoot>
                    <tr><?php if (!FM_READONLY): ?>
                            <td></td><?php endif; ?>
                        <td colspan="<?php echo !FM_IS_WIN ? '6' : '4' ?>"><em><?php echo lng('Folder is empty'); // TransMore ?></em></td>
                    </tr>
                </tfoot>
                <?php
            } else {
                ?>
                <tfoot>
                    <tr><?php if (!FM_READONLY): ?>
                            <td class="gray"></td><?php endif; ?>
                        <td class="gray" colspan="<?php echo !FM_IS_WIN ? '6' : '4' ?>">
                            <?php echo lng('FullSize').': <span class="badge badge-light">'.fm_get_filesize($all_files_size).'</span>' ?>
                            <?php echo lng('Files').': <span class="badge badge-light">'.$num_files.'</span>' // EV-soft ?>
                            <?php echo lng('Folders').': <span class="badge badge-light">'.$num_folders.'</span>' // EV-soft ?>
                            <?php echo lng('MemoryUsed').': <span class="badge badge-light">'.fm_get_filesize(@memory_get_usage(true)).'</span>' ?>
                            <?php echo lng('PartitionSize').': <span class="badge badge-light">'.fm_get_filesize(@disk_free_space($path)) .'</span> '.lng('FreeOf').' <span class="badge badge-light">'.fm_get_filesize(@disk_total_space($path)).'</span>'; ?>
                        </td>
                    </tr>
                </tfoot>
                <?php
            }
            ?>
        </table>
    </div>

    <div class="row">
        <?php if (!FM_READONLY): ?>
        <div class="col-xs-12 col-sm-9">
            <ul class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php echo lng('SelectAll') ?> </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php echo lng('UnSelectAll') ?> </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php echo lng('InvertSelection') ?> </a></li>
                <small><?php echo lng('With selected'); // EV-soft ?>: </small>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders').'?'; // EV-soft more ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="far fa-trash-alt "></i> <?php echo lng('Delete') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo lng('Create archive').'?'; // EV-soft more ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="far fa-file-archive colr2"></i> <?php echo lng('Zip') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive').'?'; // EV-soft more ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="far fa-file-archive colr2"></i> <?php echo lng('Tar') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="far fa-copy "></i> <?php echo lng('Copy') ?> </a></li>
            </ul>
        </div>
        <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted"><?php echo APP_TITLE; echo ' '.VERSION; // TransMore ?></a></div>
        <?php else: ?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted"><?php echo APP_TITLE; echo ' '.VERSION; // TransMore ?></a></div>
        <?php endif; ?>
    </div>

</form>

<?php
fm_show_footer();
echo '<script>document.getElementById("spinner").style.display = "none"; </script>'; // EV-soft
            
//--- END

// Functions

/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($path)
{
    if (is_link($path)) {
        return unlink($path);
    } elseif (is_dir($path)) {
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rdelete($path . '/' . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return ($ok) ? rmdir($path) : false;
    } elseif (is_file($path)) {
        return unlink($path);
    }
    return false;
}

/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */
function fm_rchmod($path, $filemode, $dirmode)
{
    if (is_dir($path)) {
        if (!chmod($path, $dirmode)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rchmod($path . '/' . $file, $filemode, $dirmode)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($path)) {
        return true;
    } elseif (is_file($path)) {
        return chmod($path, $filemode);
    }
    return false;
}

/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($old, $new)
{
    $allowed = (FM_EXTENSION) ? explode(',', FM_EXTENSION) : false;

    $ext = strtolower(pathinfo($new, PATHINFO_EXTENSION));  #202
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    if(!$isFileAllowed) return false;

    return (!file_exists($new) && file_exists($old)) ? rename($old, $new) : null;
}

/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($path, $dest, $upd = true, $force = true)
{
    if (is_dir($path)) {
        if (!fm_mkdir($dest, $force)) {
            return false;
        }
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rcopy($path . '/' . $file, $dest . '/' . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return $ok;
    } elseif (is_file($path)) {
        return fm_copy($path, $dest, $upd);
    }
    return false;
}

/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) {
            return $dir;
        } elseif (!$force) {
            return false;
        }
        unlink($dir);
    }
    return mkdir($dir, 0777, true);
}

/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd
 * @return bool
 */
function fm_copy($f1, $f2, $upd)
{
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) {
            return false;
        }
    }
    $ok = copy($f1, $f2);
    if ($ok) {
        touch($f2, $time1);
    }
    return $ok;
}

/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($file_path)
{
    if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_path);
        finfo_close($finfo);
        return $mime;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($file_path);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $file = escapeshellarg($file_path);
        $mime = shell_exec('file -bi ' . $file);
        return $mime;
    } else {
        return '--';
    }
}

/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($url, $code = 302)
{
    header('Location: ' . $url, true, $code);
    exit;
}

/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($path) {
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($path)
{
    $path = trim($path);
    $path = trim($path, '\\/');
    $path = str_replace(array('../', '..\\'), '', $path);
    $path =  get_absolute_path($path);
    if ($path == '..') {
        $path = '';
    }
    return str_replace('\\', '/', $path);
}

/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($path)
{
    $path = fm_clean_path($path);
    if ($path != '') {
        $array = explode('/', $path);
        if (count($array) > 1) {
            $array = array_slice($array, 0, -1);
            return implode('/', $array);
        }
        return '';
    }
    return false;
}

/*
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($tr) {
    try {
        $content = @file_get_contents('./cdn/FM_translation.json');  //  EV-soft
        if($content !== FALSE) {
            $lng = json_decode($content, TRUE);
            global $lang_list;
            foreach ($lng["language"] as $key => $value)
            {
                $code = $value["code"];
                $lang_list[$code] = $value["name"];
                if ($tr)
                    $tr[$code] = $value["translation"];
            }
            return $tr;
        }
    }
    catch (Exception $e) {
        echo $e;
    }
}

/**
 * @param $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($file)
{
    static $iswin;
    if (!isset($iswin)) {
        $iswin = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN');
    }

    static $exec_works;
    if (!isset($exec_works)) {
        $exec_works = (function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') == 'EXEC');
    }

    // try a shell command
    if ($exec_works) {
        $cmd = ($iswin) ? "for %F in (\"$file\") do @echo %~zF" : "stat -c%s \"$file\"";
        @exec($cmd, $output);
        if (is_array($output) && ctype_digit($size = trim(implode("\n", $output)))) {
            return $size;
        }
    }

    // try the Windows COM interface
    if ($iswin && class_exists("COM")) {
        try {
            $fsobj = new COM('Scripting.FileSystemObject');
            $f = $fsobj->GetFile( realpath($file) );
            $size = $f->Size;
        } catch (Exception $e) {
            $size = null;
        }
        if (ctype_digit($size)) {
            return $size;
        }
    }

    // if all else fails
    return filesize($file);
}

/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($size) // EV-soft - Rename: fm_nice_filesize ?
{   if (!is_numeric($size)) return $size; //  string 'Folder'  // EV-soft
    if ($size < 1000) {
        return sprintf( '%s &nbsp;B', $size);  // Pretty EV-soft
    } elseif (($size / 1024) < 1000) {
        return sprintf( '%s KB', round(($size / 1024), 2));
    } elseif (($size / 1024 / 1024) < 1000) {
        return sprintf( '%s MB', round(($size / 1024 / 1024), 2));
    } elseif (($size / 1024 / 1024 / 1024) < 1000) {
        return sprintf( '%s GB', round(($size / 1024 / 1024 / 1024), 2));
    } else {
        return sprintf( '%s TB', round(($size / 1024 / 1024 / 1024 / 1024), 2));
    }
}

/**
 * Get director total size
 * @param string $directory
 * @return string
 */
function fm_get_directorysize($directory) {
    global $calc_folder;
    if ($calc_folder==true) { //  Slower output
      $size = 0;  $count= 0;  $dirCount= 0;
      foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $fileinfo)
      if ($fileinfo->isFile())
          { $size += $fileinfo->getSize();
            $count++;
          }
      else  // $fileinfo->isDir() :
          $dirCount++;   // counting: '.' and '..' in each directory
      $dirCount= $dirCount / 2 - 1; //  EV-soft
      return [$size, $count, $dirCount];
    }
    else return [lng('Folder')]; //  Quick output
}

/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zif_info($path, $ext) {
    $filenames = array(); // EV-soft:
    if ($ext == 'zip' && function_exists('zip_open')) {
       $zip = new ZipArchive;
        $stat = $zip->open($path);
        if ($stat === TRUE) { 
            for( $i = 0; $i < $zip->numFiles; $i++ ) {
            $filenames[] = array(
                    'index'           => $zip->statIndex($i)['index'],
                    'name'            => $zip->statIndex($i)['name'],
                    'filesize'        => $zip->statIndex($i)['size'],
                    'filetime'        => $zip->statIndex($i)['mtime'],
                    'crc'             => $zip->statIndex($i)['crc'],
                    'comp_method'     => $zip->statIndex($i)['comp_method'],
                    'compressed_size' => $zip->statIndex($i)['comp_size'],
                    'folder'   => substr($zip->statIndex($i)['name'], -1) == '/'
                );
            }
            $zip->close();
            return $filenames;
          } else { echo 'failed, code:' . $stat; } 

        $arch = zip_open($path);
        if ($arch) { $i= 0;
            while ($zip_entry = zip_read($arch)) {
                $zip_name     = zip_entry_name($zip_entry);
                $zip_folder   = substr($zip_name, -1) == '/';
                $filenames[]  = array(
                    'index'     => $i++,
                    'name'      => $zip_name,
                    'filesize'  => zip_entry_filesize($zip_entry),
                    'filetime'  => '',
                    'crc'       => '',
                    'comp_method' => zip_entry_compressionmethod($zip_entry),
                    'compressed_size' => zip_entry_compressedsize($zip_entry),
                    'folder'    => $zip_folder
                );
            }
            zip_close($arch);
            return $filenames;
        }
    } elseif($ext == 'tar' && class_exists('PharData')) {
        $archive = new PharData($path);
        $i= 0;
        foreach(new RecursiveIteratorIterator($archive) as $file) {
            $parent_info = $file->getPathInfo();
            $zip_name = str_replace("phar://".$path, '', $file->getPathName());
            $zip_name = substr($zip_name, ($pos = strpos($zip_name, '/')) !== false ? $pos + 1 : 0);
            $zip_folder = $parent_info->getFileName();
            $zip_info = new SplFileInfo($file);
            $arh_info = new PharFileInfo($file);
            $filenames[] = array(
                'index'           => $i++,
                'name'            => $zip_name,
                'filesize'        => $zip_info->getSize(),
                'filetime'        => $zip_info->getMTime (),
                'crc'             => $arh_info->getCRC32(),
                'comp_method'     => '',
                'compressed_size' => $arh_info->getCompressedSize(),
                'folder'          => false  //  $zip_folder
            );
        }
        return $filenames;
    }
    else echo ' Missing something! (zip_open or PharData?) ';  // EV-soft
    return false;
}

/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($msg, $status = 'ok')
{
    $_SESSION[FM_SESSION_ID]['message'] = lng($msg);  // EV-soft
    $_SESSION[FM_SESSION_ID]['status'] = $status;
}

/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($string)
{
    return preg_match('//u', $string);
}

/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($filename)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $filename = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $filename);
    }
    return $filename;
}

/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($obj)
{
    if (!is_object($obj) && !is_array($obj)) {
        return $obj;
    }
    if (is_object($obj)) {
        $obj = get_object_vars($obj);
    }
    return array_map('fm_object_to_array', $obj);
}

/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($path)
{
    // get extension
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    switch ($ext) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'svg':
            $img = 'far fa-file-image colr1';
            break;
		case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'cs':
        case 'py':
        case 'map':
        case 'lock':
        case 'dtd':
            $img = 'far fa-file-code colr3';
            break;
		case 'key':
		case 'crt':	
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
            $img = 'far fa-file-alt colr4';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $img = 'fab fa-css3-alt colr8';
            break;
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tar':
        case '7z':
            $img = 'far fa-file-archive colr2';
            break;
		case 'lua':	
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $img = 'far fa-file-code colr3';
            break;
        case 'user':
		case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $img = 'fab fa-html5 colr5';
            break;
        case 'xml':
		case 'yaml':
        case 'xsl':
            $img = 'far fa-file-excel colr6';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $img = 'far fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
            $img = 'far fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
            $img = 'far fa-file-video';
            break;
        case 'eml':
        case 'msg':
            $img = 'far fa-envelope';
            break;
        case 'xls':
        case 'xlsx':
            $img = 'far fa-file-excel colr6';
            break;
        case 'db':
            $img = 'fas fa-database';
            break;
        case 'csv':
            $img = 'far fa-file-alt colr4';
            break;
        case 'bak':
            $img = 'far fa-clipboard';
            break;
        case 'doc':
        case 'docx':
            $img = 'far fa-file-word';
            break;
        case 'ppt':
        case 'pptx':
            $img = 'far fa-file-powerpoint colr7';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $img = 'far fa-font';
            break;
        case 'pdf':
            $img = 'far fa-file-pdf';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $img = 'far fa-file-image colr1'; 
            break;
        case 'exe':
        case 'msi':
            $img = 'far fa-file';
            break;
        case 'bat':
            $img = 'far fa-terminal';
            break;
        default:
            $img = 'fas fa-info-circle';
    }

    return $img;
}

/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg');
}

/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('webm', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}

/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}

/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt', 'css', 'ini', 'conf', 'log', 'htaccess', 'passwd', 'ftpquota', 'sql', 'js', 'json', 'sh', 'config',
        'php', 'php4', 'php5', 'phps', 'phtml', 'htm', 'html', 'shtml', 'xhtml', 'xml', 'xsl', 'm3u', 'm3u8', 'pls', 'cue',
        'eml', 'msg', 'csv', 'bat', 'twig', 'tpl', 'md', 'gitignore', 'less', 'sass', 'scss', 'c', 'cpp', 'cs', 'py',
        'map', 'lock', 'dtd', 'svg', 'scss', 'asp', 'aspx', 'asx', 'asmx', 'ashx', 'jsx', 'jsp', 'jspx', 'cfm', 'cgi' //  #202
    );
}

/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
    );
}

/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}

/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar');
}

/**
 * Class to work with zip files (using ZipArchive)
 */
class FM_Zipper
{
    private $zip;

    public function __construct()
    {
        $this->zip = new ZipArchive();
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files)
    {
        $res = $this->zip->open($filename, ZipArchive::CREATE);
        if ($res !== true) {
            return false;
        }
        if (is_array($files)) {
            foreach ($files as $f) {
                if (!$this->addFileOrDir($f)) {
                    $this->zip->close();
                    return false;
                }
            }
            $this->zip->close();
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                $this->zip->close();
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path)
    {
        $res = $this->zip->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->zip->extractTo($path)) {
            $this->zip->close();
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            return $this->zip->addFile($filename);
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        if (!$this->zip->addEmptyDir($path)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        if (!$this->zip->addFile($path . '/' . $file)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Class to work with Tar files (using PharData)
 */
class FM_Zipper_Tar
{
    private $tar;

    public function __construct()
    {
        $this->tar = null;
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files)
    {
        $this->tar = new PharData($filename);
        if (is_array($files)) {
            foreach ($files as $f) {
                if (!$this->addFileOrDir($f)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path)
    {
        $res = $this->tar->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->tar->extractTo($path)) {
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            return $this->tar->addFile($filename);
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        try {
                            $this->tar->addFile($path . '/' . $file);
                        } catch (Exception $e) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}



/**
 * Save Configuration
 */
 class FM_Config
{
     var $data;

    function __construct()
    {
        global $root_path, $root_url, $CONFIG;
        $fm_url = $root_url.$_SERVER["PHP_SELF"];
        $this->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true
        );
        $data = false;
        if (strlen($CONFIG)) {
            $data = fm_object_to_array(json_decode($CONFIG));
        } else {
            $msg = 'Tiny File Manager<br>Error: Cannot load configuration';
            if (substr($fm_url, -1) == '/') {
                $fm_url = rtrim($fm_url, '/');
                $msg .= '<br>';
                $msg .= '<br>Seems like you have a trailing slash on the URL.';
                $msg .= '<br>Try this link: <a href="' . $fm_url . '">' . $fm_url . '</a>';
            }
            die($msg);
        }
        if (is_array($data) && count($data)) $this->data = $data;
        else $this->save();
    }

    function save()
    {
        global $root_path;
        //$fm_file = $root_path.$_SERVER["PHP_SELF"];
        $fm_file = __FILE__;   // EV-soft: independent of user set root_path
        $var_name = '$CONFIG';
        $var_value = var_export(json_encode($this->data), true);
        $config_string = "<?php" . chr(13) . chr(10) . "//Default Configuration".chr(13) . chr(10)."$var_name = $var_value;" . chr(13) . chr(10);
        if (file_exists($fm_file)) {
            $lines = file($fm_file);
            if ($fh = @fopen($fm_file, "w")) {
                @fputs($fh, $config_string, strlen($config_string));
                for ($x = 3; $x < count($lines); $x++) {
                    @fputs($fh, $lines[$x], strlen($lines[$x]));
                }
                @fclose($fh);
            }
        }
    }
}

//--- templates functions

/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($path)
{
    global $lang, $sticky_navbar, $editFile;  //  EV-soft
    $isStickyNavBar = $sticky_navbar ? 'fixed-top' : '';
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 main-nav <?php echo $isStickyNavBar ?>">
        <a class="navbar-brand" href=""> <?php echo lng('AppTitle') ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
            $path = fm_clean_path($path);
            $root_url = "<a href='?p='><i class='fas fa-home' aria-hidden='true' title='" . FM_ROOT_PATH . "'></i></a>";
            $sep = '<i class="bread-crumb"> / </i>';
            if ($path != '') {
                $exploded = explode('/', $path);
                $count = count($exploded);
                $array = array();
                $parent = '';
                for ($i = 0; $i < $count; $i++) {
                    $parent = trim($parent . '/' . $exploded[$i], '/');
                    $parent_enc = urlencode($parent);
                    $array[] = "<a href='?p={$parent_enc}'>" . fm_enc(fm_convert_win($exploded[$i])) . "</a>";
                }
                $root_url .= $sep . implode($sep, $array);
            }
            echo '<div class="col-xs-6 col-sm-5">' . $root_url . $editFile. '</div>';  ## EV-soft
            ?>

            <div class="col-xs-6 col-sm-7 text-right">
                <ul class="navbar-nav mr-auto float-right">
                    <?php if (!FM_READONLY): ?>
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo lng('Search').'...'; // Translate more ?>" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a title="<?php echo lng('Upload') ?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php echo lng('Upload') ?></a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php echo lng('NewItem') ?>" class="nav-link" href="#createNewItem" data-toggle="modal" data-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php echo lng('NewItem') ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (FM_USE_AUTH): ?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php if(isset($_SESSION[FM_SESSION_ID]['logged'])) { echo $_SESSION[FM_SESSION_ID]['logged']; } ?></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                            <?php endif ?>
                            <a title="<?php echo lng('Help') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo lng('Help') ?></a>
                            <a title="<?php echo lng('Logout') ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo lng('Logout') ?></a>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}

/**
 * Show message from session
 */
function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]['message'])) {
        $class = isset($_SESSION[FM_SESSION_ID]['status']) ? $_SESSION[FM_SESSION_ID]['status'] : 'ok';
        echo '<p class="message ' . $class . '">' . $_SESSION[FM_SESSION_ID]['message'] . '</p>';
        unset($_SESSION[FM_SESSION_ID]['message']);
        unset($_SESSION[FM_SESSION_ID]['status']);
    }
}

/**
 * Show page header in Login Form
 */
function fm_show_header_login()
{ global $javaMess;
$sprites_ver = '20160315';
header("Content-Type: text/html; charset=utf-8");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

global $lang, $root_url, $favicon_path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $javaMess; // EV-soft ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="icon" href="<?php echo fm_enc($favicon_path) ?>" type="image/png">
    <title><?php echo fm_enc(APP_TITLE) ?></title>
    <link rel="stylesheet" href="cdn/bootstrap.min.css">
    <style>
        body.fm-login-page{background-color:#f7f9fb;font-size:14px}
        .fm-login-page .brand{width:121px;overflow:hidden;margin:0 auto;margin:40px auto;margin-bottom:0;position:relative;z-index:1}
        .fm-login-page .brand img{width:100%}
        .fm-login-page .card-wrapper{width:360px}
        .fm-login-page .card{border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{margin-bottom:1.5rem;font-size:24px;font-weight:300;letter-spacing:-.5px}
        .fm-login-page .form-control{border-width:2.3px}
        .fm-login-page .form-group label{width:100%}
        .fm-login-page .btn.btn-block{padding:12px 10px}
        .fm-login-page .footer{margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width: 425px) {
            .fm-login-page .card-wrapper{width:90%;margin:0 auto}
        }
        @media screen and (max-width: 320px) {
            .fm-login-page .card.fat{padding:0}
            .fm-login-page .card.fat .card-body{padding:15px}
        }
        .message{padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{border-color:green;color:green}
        .message.error{border-color:red;color:red}
        .message.alert{border-color:orange;color:orange}
    </style>
</head>
<body class="fm-login-page">
<div id="wrapper" class="container-fluid">

    <?php
    }

    /**
     * Show page footer in Login Form
     */
    function fm_show_footer_login()
    {
    ?>
</div>
<script src="cdn/jquery.slim.min.js"></script>
<script src="cdn/bootstrap.min.js"></script>
</body>
</html>
<?php
}

/**
 * Show Header after login
 */
function fm_show_header()
{ global $javaMess;
$sprites_ver = '20160315';
header("Content-Type: text/html; charset=utf-8");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

global $lang, $root_url, $sticky_navbar, $favicon_path, $calc_folder; //  EV-soft
$isStickyNavBar = $sticky_navbar ? 'navbar-fixed' : 'navbar-normal';
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $javaMess; // EV-soft ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="icon" href="<?php echo fm_enc($favicon_path) ?>" type="image/png">
    <title><?php echo fm_enc(APP_TITLE) ?></title>
    <link rel="stylesheet" href="cdn/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="cdn/ekko-lightbox.css" />
    <?php if (FM_USE_HIGHLIGHTJS): ?>
    <link rel="stylesheet" href="cdn/<?php echo FM_HIGHLIGHTJS_STYLE ?>.min.css">
    <?php endif; ?>
    <style>
        body {
            font-size: 14px;
            color: #222;
            background: #F7F7F7;
        }
        body.navbar-fixed {
            margin-top: 55px;
        }
        a:hover, a:visited, a:focus {
            text-decoration: none !important;
        }
        * {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
        }
        .filename, td, th {
            white-space: nowrap;
        }
        .filename { /* EV-soft */
            color: #007bff;
        }
        .icon { /* EV-soft */
            color: #222222;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-item.avatar a {
            cursor: pointer;
            text-transform: capitalize;
        }
        .nav-item.avatar a > i {
            font-size: 15px;
        }
        .nav-item.avatar .dropdown-menu a {
            font-size: 13px;
        }
        #search-addon {
            font-size: 12px;
            border-right-width: 0;
        }
        #search-addon2 {
            background: transparent;
            border-left: 0;
        }
        .bread-crumb {
            color: #cccccc;
            font-style: normal;
        }
        #main-table .filename a {
            color: #007bff;    /* EV-soft */
        }
        .table td, .table th {
            vertical-align: middle !important;
        }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox {
            padding: 0;
            min-width: 18px;
        }
        .table-sm td, .table-sm th { padding: .4rem;}
        .table-bordered td, .table-bordered th { border: 1px solid #f1f1f1;}
        /* .table-bordered tr:nth-child(even) { background: #f2f2f2; } /* ## alternative to BT: table-striped */
        .hidden {
            display: none
        }
        pre.with-hljs {
            padding: 0
        }
        pre.with-hljs code {
            margin: 0;
            border: 0;
            overflow: visible
        }
        code.maxheight, pre.maxheight {
            max-height: 512px
        }
        .fa.fa-caret-right {
            font-size: 1.2em;
            margin: 0 4px;
            vertical-align: middle;
            color: #ececec
        }
        .fas.fa-home {
            font-size: 1.3em;
            vertical-align: bottom
        }
        .fas.fa-folder {   /* EV-soft */
            color: gold;
        }
        .path {
            margin-bottom: 10px
        }
        form.dropzone {
            min-height: 200px;
            border: 2px dashed #007bff;
            line-height: 6rem;
        }
        .right {
            text-align: right
        }
        .center, .close, .login-form {
            text-align: center
        }
        .fsize {  /* EV-soft */
            text-align: right;
            width: 120px;
            padding: 2px;
        }
        .tblcol {  /* EV-soft */
            text-align: center;
            width:120px;
            padding: 2px;
        }
        .message {
            padding: 4px 7px;
            border: 1px solid #ddd;
            background-color: #fff
        }
        .message.ok {
            border-color: green;
            color: green
        }
        .message.error {
            border-color: red;
            color: red
        }
        .message.alert {
            border-color: orange;
            color: orange
        }
        .preview-img {
            max-width: 100%;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC)
        }
        .inline-actions > a > i {
            font-size: 1em;
            margin-left: 5px;
            /* background: #3785c1; */
            color: #fff;
            padding: 3px;
            border-radius: 3px
        }
        .preview-video {
            position: relative;
            max-width: 100%;
            height: 0;
            padding-bottom: 62.5%;
            margin-bottom: 10px
        }
        .preview-video video {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: #000
        }
        .compact-table {
            border: 0;
            width: auto
        }
        .compact-table td, .compact-table th {
            width: 100px;
            border: 0;
            text-align: center
        }
        .compact-table tr:hover td {
            background-color: #fff
        }
        .filename {
            max-width: 420px;
            overflow: hidden;
            text-overflow: ellipsis
        }
        .break-word {
            word-wrap: break-word;
            margin-left: 30px
        }
        .break-word.float-left a {
            color: #7d7d7d
        }
        .break-word + .float-right {
            padding-right: 30px;
            position: relative
        }
        .break-word + .float-right > a {
            color: #7d7d7d;
            font-size: 1.2em;
            margin-right: 4px
        }
        #editor {
            position: absolute;
            right: 15px;
            top: 100px;
            bottom: 15px;
            left: 15px
        }
        @media (max-width:481px) {
            #editor {
                top: 150px;
            }
        }
        #normal-editor {
            border-radius: 3px;
            border-width: 2px;
            padding: 10px;
            outline: none;
        }
        .btn-2 {
            border-radius: 0;
            padding: 3px 6px;
            font-size: small;
        }
        li.file:before,li.folder:before{font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px}
        li.folder:before{content:"\f114"}
        .btn-2 i.far.fa-file-archive{color:inherit}
        /* 
        i.far.fa-folder{color:#0157b3}
        i.far.fa-file-image{color:#26b99a}
        i.fa.fa-file-archive-o{color:#da7d7d}
        i.far.fa-css3{color:#f36fa0}
        i.far.fa-file-code{color:#222222}
        i.far.fa-code{color:#cc4b4c}
        i.far.fa-file-alt{color:#0096e6}
        i.fab.fa-html5{color:#d75e72}
        i.far.fa-file-excel{color:#09c55d}
        i.fa.fa-file-powerpoint-o{color:#f6712e}
         */
        /* EV-soft: i.far.fa-file-code{color: */
        /* ICON-colors: colrx used in icon $ing class:  */
        .colr0 { color:#0157b3; } /* fa-folder          */
        .colr1 { color:#26b99a; } /* fa-file-image      */
        .colr2 { color:#da7d7d; } /* fa-file-archive    */
        .colr3 { color:#cc4b4c; } /* fa-file-code       */
        .colr4 { color:#0096e6; } /* fa-file-alt        */
        .colr5 { color:#d75e72; } /* fa-html5           */
        .colr6 { color:#09c55d; } /* fa-file-excel      */
        .colr7 { color:#f6712e; } /* fa-file-powerpoint */
        .colr8 { color:#f36fa0; } /* fa-file-css3       */
        /* BUTTON-colors: */
        .colrEra { background:red; }    /* Erase    far fa-trash-alt */
        .colrEdi { background:yellow; } /* Edit     far fa-edit */
        .colrRen { background:brown; }  /* Rename   far fa-edit */
        .colrCpy { background:green; }  /* Copy     far fa-copy */
        .colrLnk { background:DodgerBlue; }   /* Link     fa fa-link */
        .colrShw { background:Orange; }   /* Show     fa fa-eye */
        .colrDel { background:Violet; }   /* Delete   fa fa-download */
        .colrDwn { background:MediumSeaGreen; }   /* Download fa fa-cloud-download fa fa-download */
        
        i.go-back {
            font-size: 1.2em;
            color: #007bff; /* EV-soft  color: #222222; */
        }
        .main-nav {
            padding: 0.2rem 1rem;
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
        }
        .dataTables_filter {
            display: none;
        }
        table.dataTable thead .sorting {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC');
        }
        table.dataTable thead .sorting_asc {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg==');
        }
        table.dataTable thead .sorting_desc {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII=');
        }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child{
            background-image: none;
        }
        .footer-action li {
            margin-bottom: 10px;
        }
        .app-v-title {
            font-size: 24px;
            font-weight: 300;
            letter-spacing: -.5px;
            text-transform: uppercase;
        }
        hr.custom-hr {
            border-top: 1px dashed #8c8b8b;
            border-bottom: 1px dashed #fff;
        }
        .ekko-lightbox .modal-dialog { max-width: 98%; }
        .ekko-lightbox-item.fade.in.show .row { background: #fff; }
        .ekko-lightbox-nav-overlay{
            display: flex !important;
            opacity: 1 !important;
            height: auto !important;
            top: 50%;
        }

        .ekko-lightbox-nav-overlay a{
            opacity: 1 !important;
            width: auto !important;
            text-shadow: none !important;
            color: #3B3B3B;
        }

        .ekko-lightbox-nav-overlay a:hover{
            color: #20507D;
        }
    /* CUSTOM TITLE (Hint):  EV-soft  */
        /* .body { font-family: sans-serif; } */
        [data-title] {
          position: relative;
          cursor: help;
        }
        [data-title]:hover::before {
          content: attr(data-title);
          position: absolute;
          top: 26px;
          min-width: 180px;
          max-width: 380px;
          z-index: 9999;
          text-align: center;
          animation-delay: 2500ms;
          display: inline-block;
          padding: 4px 8px;
          border-radius: 4px;
          background: #444;
          color: #fff;
          font-size: 12px;
          font-family: sans-serif;
          white-space: normal; /* nowrap */
        }
        #main-table span.badge{border-bottom:2px solid #f8f9fa}#main-table span.badge:nth-child(1){border-color:#df4227}#main-table span.badge:nth-child(2){border-color:#f8b600}#main-table span.badge:nth-child(3){border-color:#00bd60}#main-table span.badge:nth-child(4){border-color:#4581ff}#main-table span.badge:nth-child(5){border-color:#ac68fc}#main-table span.badge:nth-child(6){border-color:#45c3d2}
        @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 2) { .navbar-collapse .col-xs-6.text-right { padding: 0; } }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus{outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important}
        .lds-facebook{display:none;position:relative;width:64px;height:64px}.lds-facebook div,.lds-facebook.show-me{display:inline-block}.lds-facebook div{position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite}.lds-facebook div:nth-child(1){left:6px;animation-delay:-.24s}.lds-facebook div:nth-child(2){left:26px;animation-delay:-.12s}.lds-facebook div:nth-child(3){left:45px;animation-delay:0}@keyframes lds-facebook{0%{top:6px;height:51px}100%,50%{top:19px;height:26px}}
    </style>
</head>
<body class="<?php echo $isStickyNavBar; ?>">
<?php if ($calc_folder==true and false) //  Progress/Spinner: //  EV-soft
  echo '<div class="center" id="spinner"> <i class="fa fa-cog fa-spin fa-3x fa-fw"></i><br>'.lng('Calculating folder content takes time...').' </div>; '; //  Not good. Maybe Progress bar insted?
?>

<div id="wrapper" class="container-fluid">

    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" aria-label="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php echo lng('ItemType') ?> </label></p>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="newfile" value="file" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1"><?php echo lng('File') ?></label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="newfile" value="folder" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadioInline2"><?php echo lng('Folder') ?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                    <button type="button" class="btn btn-success" onclick="newfolder('<?php echo fm_enc(FM_PATH) ?>');return false;"><i class="fa fa-check-circle"></i> <?php echo lng('CreateNow') ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <script type="text/html" id="js-tpl-modal">
        <div class="modal fade" id="js-ModalCenter-<%this.id%>" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalCenterTitle"><%this.title%></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <%this.content%>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                        <%if(this.action){%><button type="button" class="btn btn-primary" id="js-ModalCenterAction" data-type="js-<%this.action%>"><%this.action%></button><%}%>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <?php
    }

    /**
     * Show page footer
     */
    function fm_show_footer()
    { global $tablLang; // EV-soft more
    ?>
</div>
<script src="cdn/jquery.min.js"></script>
<script src="cdn/bootstrap.min.js"></script>
<script src="cdn/jquery.dataTables.min.js"></script>
<script src="cdn/ekko-lightbox.min.js"></script>
<?php if (FM_USE_HIGHLIGHTJS): ?>
    <script src="cdn/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad(); var isHighlightingEnabled = true;</script>
<?php endif; ?>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        var reInitHighlight = function() { if(typeof isHighlightingEnabled !== "undefined" && isHighlightingEnabled) { setTimeout(function () { $('.ekko-lightbox-container pre code').each(function (i, e) { hljs.highlightBlock(e) }); }, 555); } };
        $(this).ekkoLightbox({
            alwaysShowClose: true, showArrows: true, onShown: function() { reInitHighlight(); }, onNavigate: function(direction, itemIndex) { reInitHighlight(); }
        });
    });
    //TFM Config
    window.curi = "https://tinyfilemanager.github.io/config.json", window.config = null;
    function fm_get_config(){ if(!!window.name){ window.config = JSON.parse(window.name); } else { $.getJSON(window.curi).done(function(c) { if(!!c) { window.name = JSON.stringify(c), window.config = c; } }); }}
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function newfolder(e) {
        var t = document.getElementById("newfilename").value, n = document.querySelector('input[name="newfile"]:checked').value;
        null !== t && "" !== t && n && (window.location.hash = "#", window.location.search = "p=" + encodeURIComponent(e) + "&new=" + encodeURIComponent(t) + "&type=" + encodeURIComponent(n))
    }
    function rename(e, t) {var pmt = "<?php echo lng('New name'); //Translate ?>"; var n = prompt(pmt, t);null !== n && "" !== n && n != t && (window.location.search = "p=" + encodeURIComponent(e) + "&ren=" + encodeURIComponent(t) + "&to=" + encodeURIComponent(n))}
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) { //Create file backup with .bck (EV-soft: $newFile = $file . '-' . $date . '.bak'; ?)
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && alert(n.responseText)
        }, n.send(a), !1
    }
    //Save file
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (n) {
            if(true){
                var data = {ajax: true, content: n, type: 'save'};
                
                $.ajax({
                    type: "POST",
                    url: window.location,
                    // The key needs to match your method's input parameter (case-sensitive).
                    data: JSON.stringify(data),
                    contentType: "multipart/form-data-encoded; charset=utf-8",
                    //dataType: "json",
                    success: function(mes){window.onbeforeunload = function() {return}},
                    failure: function(mes) {alert("error");}
                });
                
            }
            else{
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), document.body.appendChild(a), a.submit()
            }
        }
    }
    //Check latest version
    function latest_release_info(v) {
        if(!!window.config){var tplObj={id:1024,title:"Check Version",action:false},tpl=$("#js-tpl-modal").html();
        if(window.config.version!=v){tplObj.content=window.config.newUpdate;}else{tplObj.content=window.config.noUpdate;}
        $('#wrapper').append(template(tpl,tplObj));$("#js-ModalCenter-1024").modal('show');}else{fm_get_config();}
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); window.open("https://tinyfilemanager.github.io/docs/pwd.html", '_blank'); }
    //Save Settings
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    //Create new password hash
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    //Upload files using URL @param {Object}
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    // Dom Ready Event
    $(document).ready( function () {
        //load config
        fm_get_config();
        //dataTable init
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
        //  _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3],
            _targets = (tableLng && tableLng == 8 ) ? [0,     7] : tableLng == 6 ? [0,5] : [3], //  EV-soft: Added col Ext
            mainTable = $('#main-table').DataTable({"paging": false, "info": false, "columnDefs": [{"targets": _targets, "orderable": false }],
            "language": { "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/<?php echo $tablLang; ?>" }  //  EV-soft more
            });
        $('#search-addon').on( 'keyup', function () { //Search using custom input box
            mainTable.search( this.value ).draw();
        });
        $('#zip_table').DataTable({"orderable": true }); //{"paging": false, "info": false });  //  EV-soft - Sorting dont work!
        
        //upload nav tabs
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
        $(window).load(function(){ $('#spinner').fadeOut(); }); // EV-soft
    });
</script>
<?php if (isset($_GET['edit']) && isset($_GET['env']) && FM_EDIT_FILE): 
        $ext = "javascript";
        $ext = strtolower(pathinfo($_GET["edit"], PATHINFO_EXTENSION)); #202
        ?>
    <script src="cdn/ace.js"></script>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php echo $ext; ?>", inline:true} );
        //editor.setTheme("ace/theme/twilight"); //Dark Theme
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    } else if(editorOption == "help") {
                        var helpHtml="";$.each(window.config.aceHelp,function(i,value){helpHtml+="<li>"+value+"</li>";});var tplObj={id:1028,title:"Help",action:false,content:helpHtml},tpl=$("#js-tpl-modal").html();$('#wrapper').append(template(tpl,tplObj));$("#js-ModalCenter-1028").modal('show');
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }
            });
        });
    </script>
<?php endif; ?>
</body>
</html>
<?php
}

/**
 * Show image
 * @param string $img
 */
function fm_show_image($img)
{
    $modified_time = gmdate('D, d M Y 00:00:00') . ' GMT';
    $expires_time = gmdate('D, d M Y 00:00:00', strtotime('+1 day')) . ' GMT';

    $img = trim($img);
    $images = fm_get_images();
    $image = 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAEElEQVR42mL4//8/A0CAAQAI/AL+26JNFgAAAABJRU5ErkJggg==';
    if (isset($images[$img])) {
        $image = $images[$img];
    }
    $image = base64_decode($image);
    if (function_exists('mb_strlen')) {
        $size = mb_strlen($image, '8bit');
    } else {
        $size = strlen($image);
    }

    if (function_exists('header_remove')) {
        header_remove('Cache-Control');
        header_remove('Pragma');
    } else {
        header('Cache-Control:');
        header('Pragma:');
    }

    header('Last-Modified: ' . $modified_time, true, 200);
    header('Expires: ' . $expires_time);
    header('Content-Length: ' . $size);
    header('Content-Type: image/png');
    echo $image;

    exit;
}


/**
 * Language Translation System
 * @param string $txt
 * @return string
 */
function lng($txt) {
    global $lang;

    // English Language
    $tr['en']['AppName']        = 'Tiny File Manager';      $tr['en']['AppTitle']           = 'File Manager';
    $tr['en']['Login']          = 'Sign in';                $tr['en']['Username']           = 'Username';
    $tr['en']['Password']       = 'Password';               $tr['en']['Logout']             = 'Sign Out';
    $tr['en']['Move']           = 'Move';                   $tr['en']['Copy']               = 'Copy';
    $tr['en']['Save']           = 'Save';                   $tr['en']['SelectAll']          = 'Select all';
    $tr['en']['UnSelectAll']    = 'Unselect all';           $tr['en']['File']               = 'File';
    $tr['en']['Back']           = 'Back';                   $tr['en']['Size']               = 'Size';
    $tr['en']['Perms']          = 'Perms';                  $tr['en']['Modified']           = 'Modified';
    $tr['en']['Owner']          = 'Owner';                  $tr['en']['Search']             = 'Search';
    $tr['en']['NewItem']        = 'New Item';               $tr['en']['Folder']             = 'Folder';
    $tr['en']['Delete']         = 'Delete';                 $tr['en']['Rename']             = 'Rename';
    $tr['en']['CopyTo']         = 'Copy to';                $tr['en']['DirectLink']         = 'Direct link';
    $tr['en']['UploadingFiles'] = 'Upload Files';           $tr['en']['ChangePermissions']  = 'Change Permissions';
    $tr['en']['Copying']        = 'Copying';                $tr['en']['CreateNewItem']      = 'Create New Item';
    $tr['en']['Name']           = 'Name';                   $tr['en']['AdvancedEditor']     = 'Advanced Editor';
    $tr['en']['RememberMe']     = 'Remember Me';            $tr['en']['Actions']            = 'Actions';
    $tr['en']['Upload']         = 'Upload';                 $tr['en']['Cancel']             = 'Cancel';
    $tr['en']['InvertSelection']= 'Invert Selection';       $tr['en']['DestinationFolder']  = 'Destination Folder';
    $tr['en']['ItemType']       = 'Item Type';              $tr['en']['ItemName']           = 'Item Name';
    $tr['en']['CreateNow']      = 'Create Now';             $tr['en']['Download']           = 'Download';
    $tr['en']['Open']           = 'Open';                   $tr['en']['UnZip']              = 'UnZip';
    $tr['en']['UnZipToFolder']  = 'UnZip to folder';        $tr['en']['Edit']               = 'Edit';
    $tr['en']['NormalEditor']   = 'Normal Editor';          $tr['en']['BackUp']             = 'Back Up';
    $tr['en']['SourceFolder']   = 'Source Folder';          $tr['en']['Files']              = 'Files';
    $tr['en']['Move']           = 'Move';                   $tr['en']['Change']             = 'Change';
    $tr['en']['Settings']       = 'Settings';               $tr['en']['Language']           = 'Language';
    $tr['en']['MemoryUsed']     = 'Memory used';            $tr['en']['PartitionSize']      = 'Partition size';
    $tr['en']['ErrorReporting'] = 'Error Reporting';        $tr['en']['ShowHiddenFiles']    = 'Show Hidden Files';
    $tr['en']['Full size'] 		= 'Full size';				$tr['en']['Help'] 				= 'Help';
    $tr['en']['Free of'] 		= 'Free of';				$tr['en']['Preview'] 			= 'Preview';
	$tr['en']['Help Documents'] = 'Help Documents';			$tr['en']['Report Issue']		= 'Report Issue';
    $tr['en']['Generate'] 		= 'Generate';				$tr['en']['FullSize']           = 'Full Size';
    $tr['en']['FreeOf']         = 'free of';                $tr['en']['CalculateFolderSize']= 'Calculate folder size';
    $tr['en']['Check Latest Version']= 'Check Latest Version';
    $tr['en']['Generate new password hash'] = 'Generate new password hash';
    $tr['en']['HideColumns'] = 'Hide Perms/Owner columns';

    $i18n = fm_get_translations($tr);
    $tr = $i18n ? $i18n : $tr;

    if (!strlen($lang)) $lang = 'en';
    if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
    else if (isset($tr['en'][$txt])) return fm_enc($tr['en'][$txt]);
    else return "$txt";
}

/**
 * Get base64-encoded images
 * @return array
 */
function fm_get_images()
{
    return array(
        'favicon' => 'Qk04AgAAAAAAADYAAAAoAAAAEAAAABAAAAABABAAAAAAAAICAAASCwAAEgsAAAAAAAAAAAAAIQQhBCEEIQQhBCEEIQQhBCEEIQ
        QhBCEEIQQhBCEEIQQhBCEEIQQhBHNO3n/ef95/vXetNSEEIQQhBCEEIQQhBCEEIQQhBCEEc07ef95/3n/ef95/1lohBCEEIQQhBCEEIQQhBCEEIQ
        RzTt5/3n8hBDFG3n/efyEEIQQhBCEEIQQhBCEEIQQhBHNO3n/efyEEMUbef95/IQQhBCEEIQQhBCEEIQQhBCEErTVzTnNOIQQxRt5/3n8hBCEEIQ
        QhBCEEIQQhBCEEIQQhBCEEIQQhBDFG3n/efyEEIQQhBCEEIQQhBCEEIQQhBCEEIQQxRt5/3n+cc2stIQQhBCEEIQQhBCEEIQQhBCEEIQQIIZxz3n
        /ef5xzay0hBCEEIQQhBCEEIQQhBCEEIQQhBCEEIQQhBDFG3n/efyEEIQQhBCEEIQQhBCEEIQQhBK01c05zTiEEMUbef95/IQQhBCEEIQQhBCEEIQ
        QhBCEEc07ef95/IQQxRt5/3n8hBCEEIQQhBCEEIQQhBCEEIQRzTt5/3n8hBDFG3n/efyEEIQQhBCEEIQQhBCEEIQQhBKUUOWfef95/3n/ef95/IQ
        QhBCEEIQQhBCEEIQQhBCEEIQQhBJRW3n/ef95/3n8hBCEEIQQhBCEEIQQhBCEEIQQhBCEEIQQhBCEEIQQhBCEEIQQhBCEEIQQAAA=='
    );
}


/**  // EV-soft:
 * Scann sourcetxt for strings in func lng('') to translate:
 * @param string $code to analyse
 * @output to screen
 */
function scannLngStrings($code= 'de') { //  EV-soft
    function scannfor($search, &$count, &$longest, &$total, &$arrStrings) {
      $lines = file(__FILE__);  //  source
        foreach ($lines as $aline => $line) {
          if ($a= strpos(' '.$line,$search)) {
              $str= $line;
              while (strpos($str,$search)) {
                  $a= strpos($str,$search);  
                  $str= substr($str,$a+5);  
                  $b1= strpos($str,"')");
                  $b2= strpos($str,"', ");
                  if ($search=="lng('") $b= $b1; else $b= $b2;
                  $str= html_entity_decode($str);
                  $longest= max($longest,strlen(utf8_decode(substr($str,0,$b))));
                  $f= substr($str,0,$b);
                  $f= str_replace('<','&lt;',$f);   // Allow showing HTML tags
                  $f= str_replace('>','&gt;',$f);
                  $arrStrings[] = ['"'.$f.'"'];     // Can be used in CSV format "xx", "xx"
              }
            $count++; $total++;
          } }
    }      
    global $lang_list;
    $total= 0;    $count= 0;    $arrStrings= array();   $longest= 0; 
    $search1= "lng('";  $search2= "msg('";  $search3= "ntf('";  // lng(' = user interface / msg(' = system messages / // fm_set_msg(sprintf('  // EV-soft more 
    scannfor($search1, $count, $longest, $total, $arrStrings);
    scannfor($search2, $count, $longest, $total, $arrStrings);
    scannfor($search3, $count, $longest, $total, $arrStrings);
    $count= substr('00'.$count,-3);
    $arrStrings= array_unique($arrStrings, SORT_REGULAR); // Remove duplicates
    sort($arrStrings);
    echo '<p style="font-family:courier; font-size:11; ">';
    $lngArr = fm_get_translations(['']);  //  All existing lng in .FM_translation.json
    $lang= 'en';    //  System
    //$code= 'de';  //  Analyse
    $name= $lang_list[$code];
    echo '<br><b>Maintain LANGUAGE-system:</b>';
    echo '<br>Without duplicates - Total: '.count($arrStrings).' strings. The longest phrase is on '.$longest.' characters. ';
    echo '<br>Note: Only normal user interface, can be translated. Some error- and system messages is still in english!  <br>';
    echo '<br><i>Analysing: '.$code.': '.$name.'</i>';
    echo '<br>Here is the updated and sorted JSON code, that you can use to create / complete / maintain your language:';
    echo '<br>Copy / Paste the list to your editor, and translate to your language. (UTF8 file-format!)';
    echo '<br>If some strings is in <span style="color:red;">red</span>, they are missing in the language translate.';
    if ($code== 'en') 
        echo '<br><br>English is in source-file, not in .FM_translation.json! It could, if you wish to modify it.<br>';
    echo '<pre>';
    echo '<br>  {';
    echo '<br>    "name": "'.$name.'",';  //  .'{lngName: English}",';
    echo '<br>    "code": "'.$code.'",';  //  .'{ISO lngCode: en}",';
    echo '<br>    "translation": {';
    $n = count($arrStrings)-1; $i= 0;
    foreach ($arrStrings as $str) 
        if (strlen($str[0])>4) { 
        $str= trim(substr($str[0],1),'"');
        $lngstr= $lngArr[$code][$str];
        if (!$lngstr) $missing= '<span style="color:red;">'.$code.': '.lng($str); else $missing= '<span>';
        $i++;
        echo '<br>'.str_pad(' ',6,' ').'"'.$str.'": "'.$missing.$lngstr.'</span>"';
        if ($i<$n) echo ','; //  Not the last!
    }
    echo '<br>      }';
    echo '<br>  },';
    echo '</pre>';
    
    echo '<br>Keys in language '.$code.' with string the same as the key:<br>';
    foreach ($lngArr[$code] as $key => $value) { 
        if (in_array($key,$lngArr[$code])) echo '<br>'.$key;
    }
    echo '<br><br>';
    echo '<br>Outdated keys in language '.$code.' not used (maybe renamed key?):<br>';
    foreach ($lngArr[$code] as $key => $value) { 
        if (in_array($key,$lngArr['en'])) echo '<br>'.$key;
    }
    echo '<br><br>';
} // scannLngStrings();

function langList() {
    $lngLst= [];  $i= 0;
    $lines = file('./cdn/FM_language-codes.csv');  //  source
        foreach ($lines as $aline => $line) {
          $code= substr($line,0,2);
          $lang= substr($line,3);
          if ($i++ > 0) { $lngLst[$code] = $code.': '.$lang; };
        }
    return $lngLst;
}
  $langList= langList();
 SelNew($langList);
// arrPrint($langList,'$langList');

function SelNew($langList) {
  //arrPrint($langList,'$langList');
echo '<div class="form-group row">'.
     '    <label for="js-newLanguage" class="col-sm-3 col-form-label right" >'. 'Dont work yet! '.lng('Create new language').':</label>'.
     '    <div class="col-sm-5">'.
     '        <select class="form-control" id="js-newLanguage" name="js-newLanguage">';
                  function getSelected($l) { global $lang; return ($lang == $l) ? 'selected' : ''; }
                  foreach ($langList as $k => $v) {
                      echo "<option value='$k' ".getSelected($k).">$v</option>";
                  }
echo '        </select>'.
     '    </div>'.
     '</div>';
}

function archList($arrRow,$part='Body') { // EV-soft
  if ($part=='Head') {
    echo '<table class="table-bordered table-hover table-sm bg-white table-striped" id="zip_table">'.
         '<tr>'.
         '    <th>'. lng('Index').'</th>'.
         '    <th>'. lng('Path'). '</th>'.
         '    <th>'. lng('Name'). '</th>'.
       //'    <th>'. lng('Ext').  '</th>'.
       //'    <th>'. lng('CRC').  '</th>'.
         '    <th>'. lng('Size'). '</th>'.
         '    <th>'. lng('Time'). '</th>'.
       //'    <th>'. lng('Comp_method'). '</th>'.
         '    <th>'. lng('Comp_size').   '</th>'.
         '    <th>'. lng('Comp.').   '</th>'.
         '</tr>';
  } else
  if ($part=='Body') {
    $rate = intval($arrRow['compressed_size'] / $arrRow['filesize'] * 100);
    echo '<tr>'.
         '    <td class="tblcol center" style="width: 50px;">'. $arrRow['index'].   '</td>'.
         '    <td class="tblcol" style="text-align: left;">'. pathinfo ($arrRow['name'],PATHINFO_DIRNAME ). '</td>'.
         '    <td class="tblcol" style="text-align: left;">'. basename($arrRow['name']).  '</td>'.
       //'    <td class="tblcol">'. pathinfo($arrRow['name'], PATHINFO_EXTENSION).  '</td>'.
       //'    <td class="tblcol">'. $arrRow['crc'].                                 '</td>'.
         '    <td class="fsize" >'. fm_get_filesize($arrRow['filesize']).           '</td>'.
         '    <td class="tblcol">'. date(FM_DATETIME_FORMAT, $arrRow['filetime']).  '</td>'.
       //'    <td class="tblcol">'. $arrRow['comp_method'].                         '</td>'.
         '    <td class="fsize" >'. fm_get_filesize($arrRow['compressed_size']).    '</td>'.
         '    <td class="tblcol">'. $rate.' %'. '</td>'.
         '</tr>';
  } else
  if ($part=='Foot') {
    echo '</table>';
  }
}
                    
function arrPrint($arr,$name='') { if ($name>'') $name.=': ';
  echo "<pre>".$name; print_r($arr);  echo "</pre><hr>"; 
}

/*    https://fontawesome.com/how-to-use/on-the-web/setup/upgrading-from-version-4
      Vers 4.x                          Vers 5.x                          New name 
      "fa fa-arrow-circle-o-up"         "far fa-arrow-alt-circle-up"      yes
      "fa fa-bug"                       "far fa-bug"                      
      "fa fa-check-circle"              "far fa-check-circle"            
      "fa fa-check-square"              "far fa-check-square"            
      "fa fa-chevron-circle-left"       "far fa-chevron-circle-left"     
      "fa fa-cloud-download"            "fas fa-cloud-download-alt"       yes
      "fa fa-cloud-upload"              "fas fa-cloud-upload-alt"         yes
      "fa fa-cog fa-spin fa-3x fa-fw"   "far fa-cog fa-spin fa-3x fa-fw" 
      "fa fa-cog"                       "far fa-cog"                     
      "fa fa-database"                  "far fa-database"                
      "fa fa-exclamation-circle"        "far fa-exclamation-circle"      
      "fa fa-expand"                    "far fa-expand"                  
      "fa fa-external-link-square"      "far fa-external-link-square-alt" yes
      "fa fa-file-archive-o"            "far fa-file-archive"             yes
      "fa file-picture-o"    	          "far fa-file-image"               yes 
      "fa fa-picture-o"                 "far fa-picture"                  ?
      "fa fa-files-o"                   "far fa-copy"                     yes
      "fa fa-floppy-o"                  "far fa-save"                     yes
      "fa fa-link"                      "far fa-link"                    
      "fa fa-lock"                      "far fa-lock"                    
      "fa fa-pencil-square"             "far fa-pen-square"               yes
      "fa fa-pencil-square-o"           "far fa-edit"                     yes
      "fa fa-plus-square fa-fw"         "far fa-plus-square fa-fw"       
      "fa fa-plus-square"               "far fa-plus-square"             
      "fa fa-question"                  "far fa-question"                
      "fa fa-question-circle"           "far fa-question-circle"         
      "fa fa-repeat"                    "far fa-redo"                     yes
      "fa fa-reply-all"                 "far fa-reply-all"               
      "fa fa-search"                    "far fa-search"                  
      "fa fa-sign-out"                  "far fa-sign-out-alt"             yes
      "fa fa-text-height"               "far fa-text-height"             
      "fa fa-text-width"                "far fa-text-width"              
      "fa fa-th-list"                   "far fa-th-list"                 
      "fa fa-times-circle"              "far fa-times-circle"            
      "fa fa-trash"                     "far fa-trash-alt"                yes
      "fa fa-undo"                      "far fa-undo"                    
      "fa fa-window-close"              "far fa-window-close"    
      "fa fa-file-code-o"         "far fa-file-code"
      "fa fa-file-text-o"         "far fa-file-alt"
      "fa fa-css3"                "far fa-css3"
      "fa fa-file-archive-o"      "far fa-file-archive"
      "fa fa-code"                "far fa-file-code"
      "fa fa-html5"               "fab fa-html5"
      "fa fa-file-excel-o"        "far fa-file-excel"
      "fa fa-music"               "far fa-music"
      "fa fa-headphones"          "far fa-headphones"
      "fa fa-file-video-o"        "far fa-file-video"
      "fa fa-envelope-o"          "far fa-envelope"
      "fa fa-clipboard"           "far fa-clipboard"
      "fa fa-file-word-o"         "far fa-file-word"
      "fa fa-file-powerpoint-o"   "far fa-file-powerpoint"
      "fa fa-font"                "far fa-font"
      "fa fa-file-pdf-o"          "far fa-file-pdf"
      "fa fa-file-image-o"        "far fa-file-image"
      "fa fa-file-o"              "far fa-file"
      "fa fa-file-o"              "far fa-file"
      "fa fa-terminal"            "far fa-terminal"
      "fa fa-info-circle"         "fas fa-info-circle"
      "fa fa-folder-o"            "far fa-folder"
*/

/*  EV-soft additions in this file:
    Upgraded icons: font-awesome/4.7.0 to font-awesome/5.9.0
    Added column 'Ext' so you can sort on file-extension
    Corrected count folders
    Added several translate: lng('x...')  // EV-soft more
    Added list about all language codes: SelNew(langList()); (Not in use. Problems when placed in settings...) 
        SupportFile: '.FM_language-codes.csv'
    Renamed: translation.json to .FM_translation.json
    Added warning: "This page needs JavaScript..."
    CSS for column output tblcol,fsize (align, width)
    Separated buttons [fileSelecting] and [fileHandling] with text: "With selected:"
    Added fm_set_msg() to the language translate system like lng()
    Show fileTime and more, for files in ZIP/TAR-archives
    Color on actions buttons
 */
?>
