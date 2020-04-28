<?php
namespace core;

use app\ctr\indexCtrl;
use core\lib\cache;
use core\lib\log;
use mysql_xdevapi\Exception;

class im
{
    // 类的存储，防止类多次加载
    public static $classMap=array();

    public $assign;

    public static $cache;

    public static function run(){
        $drive=log::init();
        self::$cache=(new cache())->cache;
        $route=new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass=MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl=new $ctrlClass();
            $ctrl=$ctrl->$action();
            log::log('ctrl:'.$ctrlClass.PHP_EOL.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class){
        //自动加载类库
        // new \core\route();
        // $class = 'core\route'
        // IM.'/core/route.php';
        if(isset(self::$classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $file=IM.'/'.$class.'.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class]=$class;
            } else {
                return true;
            }
        }
    }

    public function assign($name,$val){
        $this->assign[$name]=$val;
    }

    public function display($file){
        $path=APP.'/views/'.$file;
        if(is_file($path)){
            // 打散数组，使数组键值独立成变量
            extract($this->assign);
            $loader = new \Twig\Loader\FilesystemLoader(APP.'/views');
            $twig = new \Twig\Environment($loader, array(
                'cache' => IM.'/log/twig',
                'debug' => DEBUG
            ));
           echo $twig->render($file,$this->assign?$this->assign:'');
        }else{

        }
    }
}
?>