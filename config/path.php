<?php
// 디렉토리 설정
define('INIT_DIR',          'init');
define('HOME_DIR',          'home');
define('CONFIG_DIR',        'config');
define('SRC_DIR',           'src');
define('LIB_DIR',           'lib');
define('THEME_DIR',         'theme');
define('MEMBER_DIR',        'member');
define('CSS_DIR',           'css');
define('JS_DIR',            'js');
define('IMG_DIR',           'img');
define('ADMIN_DIR',         'adm');
define('AJAX_DIR',          'ajax');
define('LOCALE_DIR',        'locale');
define('DATA_DIR',          'data');
define('BOARD_DIR',         'board');
define('FILE_DIR',          'files');
define('CACHE_DIR',         'cache');
define('SESSION_DIR',       'session');
define('TINYMCE_DIR',       'tinymce');
define('EDITOR_FILE_DIR',   'editor');
define('SITEMAP_DIR',       'sitemap');
define('PLUGIN_DIR',        'plugin');
define('BOARD_SKIN_DIR',    'board');

// 경로설정
define('NT_INIT_PATH',      NT_PATH.DIRECTORY_SEPARATOR.INIT_DIR);
define('NT_CONFIG_PATH',    NT_PATH.DIRECTORY_SEPARATOR.CONFIG_DIR);
define('NT_SRC_PATH',       NT_PATH.DIRECTORY_SEPARATOR.SRC_DIR);
define('NT_LIB_PATH',       NT_SRC_PATH.DIRECTORY_SEPARATOR.LIB_DIR);
define('NT_MEMBER_PATH',    NT_PATH.DIRECTORY_SEPARATOR.MEMBER_DIR);
define('NT_ADMIN_PATH',     NT_PATH.DIRECTORY_SEPARATOR.ADMIN_DIR);
define('NT_LOCALE_PATH',    NT_PATH.DIRECTORY_SEPARATOR.LOCALE_DIR);
define('NT_DATA_PATH',      NT_PATH.DIRECTORY_SEPARATOR.DATA_DIR);
define('NT_BOARD_PATH',     NT_PATH.DIRECTORY_SEPARATOR.BOARD_DIR);
define('NT_FILE_PATH',      NT_DATA_PATH.DIRECTORY_SEPARATOR.FILE_DIR);
define('NT_CACHE_PATH',     NT_DATA_PATH.DIRECTORY_SEPARATOR.CACHE_DIR);
define('NT_SESSION_PATH',   NT_DATA_PATH.DIRECTORY_SEPARATOR.SESSION_DIR);
define('NT_SITEMAP_PATH',   NT_DATA_PATH.DIRECTORY_SEPARATOR.SITEMAP_DIR);
define('NT_PLUGIN_PATH',    NT_PATH.DIRECTORY_SEPARATOR.PLUGIN_DIR);

define('NT_MEMBER_URL',     NT_URL.DIRECTORY_SEPARATOR.MEMBER_DIR);
define('NT_ADMIN_URL',      NT_URL.DIRECTORY_SEPARATOR.ADMIN_DIR);
define('NT_AJAX_URL',       NT_URL.DIRECTORY_SEPARATOR.AJAX_DIR);
define('NT_CSS_URL',        NT_URL.DIRECTORY_SEPARATOR.CSS_DIR);
define('NT_JS_URL',         NT_URL.DIRECTORY_SEPARATOR.JS_DIR);
define('NT_IMG_URL',        NT_URL.DIRECTORY_SEPARATOR.IMG_DIR);
define('NT_DATA_URL',       NT_URL.DIRECTORY_SEPARATOR.DATA_DIR);
define('NT_BOARD_URL',      NT_URL.DIRECTORY_SEPARATOR.BOARD_DIR);
define('NT_FILE_URL',       NT_DATA_URL.DIRECTORY_SEPARATOR.FILE_DIR);
define('NT_TINYMCE_URL',    NT_JS_URL.DIRECTORY_SEPARATOR.TINYMCE_DIR);
define('NT_PLUGIN_URL',     NT_URL.DIRECTORY_SEPARATOR.PLUGIN_DIR);

// 메뉴
define('NT_LINK_ADMIN',     NT_URL.DIRECTORY_SEPARATOR.ADMIN_DIR);
define('NT_LINK_LOGIN',     NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'login');
define('NT_LINK_SIGNUP',    NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'terms');
define('NT_LINK_LOGOUT',    NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'logout');
define('NT_LINK_ACCOUNT',   NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'account');
define('NT_LINK_FIND',      NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'find');
define('NT_LINK_PASSWORD',  NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'password');
define('NT_LINK_LEAVE',     NT_URL.DIRECTORY_SEPARATOR.'member'.DIRECTORY_SEPARATOR.'leave');