<?php
/**
 * 应用开始事件处理类
 * Class AppStartEvent
 * @author 向军 <houdunwangxj@gmail.com>
 */
class AppStartEvent extends Event
{
    public function run(&$options)
    {
        $this->set_const();
        $this->check_install();
    }

    //设置常量
    private function set_const()
    {
        //配置目录
        define("DATA_PATH", 'data/');
        //栏目缓存路径
        define("CATEGORY_CACHE_PATH", DATA_PATH . 'category/');
        //菜单缓存路径
        define("NODE_CACHE_PATH", DATA_PATH . 'node/');
        //模型缓存路径
        define("MODEL_CACHE_PATH", DATA_PATH . 'model/');
        //表字段缓存
        define("FIELD_CACHE_PATH", DATA_PATH . 'field/');
    }
    //验证安装
    public function check_install()
    {

        if (!file_exists('install/lock.php')) {
            echo "<script>
                top.location.href='install/';
            </script>";
            exit;
        }
    }
}