<?php

/**
 * create for SinaAppEngine
 * author : RK . cnwangyl@gmail.com
 */
function isLocalDevMode () {
    return ( in_array($_SERVER['SERVER_ADDR'], array('127.0.0.1', 'localhost')) );
}
if ( isLocalDevMode() ) {
    define('SAE_TMP_PATH', '/Volumes/Data/Dev/Github/selfoss4sae/DATA_DIR');     // sim env: SAE临时目录路径
    define('SAE_ACCESSKEY', 'test');     // sim env: Access Key
    define('SAE_SECRETKEY', 'test');     // sim env: Secret Key
    define('SAE_MYSQL_USER', 'root');     // sim env: MySQL用户名
    define('SAE_MYSQL_PASS', 'ilmself');     // sim env: MySQL密码
    define('SAE_MYSQL_HOST_M', '127.0.0.1');     // sim env: MySQL主库域名
    define('SAE_MYSQL_HOST_S', '127.0.0.1');     // sim env: MySQL从库域名
    define('SAE_MYSQL_PORT', '3306');     // sim env: MySQL端口
    define('SAE_MYSQL_DB', 'app_rkwp');     // sim env: MySQL数据库名
}

$config = array(
    //'db_type' => 'sqlite',
    //'db_file' => 'data/sqlite/selfoss.db',
    'db_type' => 'mysql',
    'db_host' => SAE_MYSQL_HOST_M,
    'db_database' => SAE_MYSQL_DB,
    'db_username' => SAE_MYSQL_USER,
    'db_password' => SAE_MYSQL_PASS,
    'db_port' => SAE_MYSQL_PORT,
    'db_prefix' => 'rss_',
    'logger_level' => 'ERROR',
    'items_perpage' => 50,
    'items_lifetime' => 30,
    'base_url' => '',
    'username' => '',
    'password' => '',
    'salt' => 'lkjl1289',
    'public' => '',
    'html_title' => 'selfoss for SAE',
    'rss_title' => 'selfoss feed',
    'rss_max_items' => 300,
    'rss_mark_as_read' => 0,
    'homepage' => 'newest',
    'language' => 'zh',
    'auto_mark_as_read' => 0,
    'auto_stream_more' => 1,
    'anonymizer' => '',
    'use_system_font' => '',
    'readability' => '',  // readability key
    'share' => 'gtfprde',
    'wallabag' => '',
    'allow_public_update_access' => '',
    'unread_order' => '',
    'load_images_on_mobile' => 0,
    'auto_hide_read_on_mobile' => 0,
    'env_prefix' => 'selfoss_',
    'env_dirs' => array(
        'cache' => SAE_TMP_PATH.'/rss_cache',   // 缓存目录
        'favicons' => SAE_TMP_PATH.'/rss_favicon',   // 网站icon缓存
        'fulltextrss' => SAE_TMP_PATH.'/rss_ftrss', // fulltext rss
        'logs' => SAE_TMP_PATH.'/rss_logs',     // 日志缓存
        'sqlite' => SAE_TMP_PATH.'/rss_sdb',   // 文件数据库缓存
        'thumbnails' => SAE_TMP_PATH.'/rss_thumb',  // 缩略图缓存
    )
);
return $config;
