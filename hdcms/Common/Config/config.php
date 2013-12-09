<?php
if (!defined("HDPHP_PATH")) exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array_merge(
//网站配置
    require "./data/config/config.inc.php",
    //数据库
    require "./data/config/db.inc.php",
    array(
        //显示debug信息
        "DEBUG_SHOW" => 1,
        //session处理
        "SESSION_ENGINE" => "mysql",
        //伪静态后缀
        "PATHINFO_HTML" => "",
        //普通模式 GET方式
        "URL_TYPE" => 2,
        //默认应用
        "DEFAULT_APP" => "Content",
        //模板后缀
        "TPL_FIX" => ".php",
        //公共函数库
        "AUTO_LOAD_FILE" => array(COMMON_LIB_PATH . 'Function/functions.php'),
    )
);
?>