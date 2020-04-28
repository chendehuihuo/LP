<?php
namespace core\lib;

class conf{
    static public $conf=array();
    public static function get($name,$file){
        /**
         * 1.判断配置文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }
        $files=IM.'/conf/'.$file.'.php';
        if(is_file($files)){
            $conf=include $files;
            if(isset($conf[$name])){
                self::$conf[$file]=$conf;
                return $conf[$name];
            }else{
                throw new \Exception('没有找到配置项'.$name);
            }
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }
    }

    public static function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }
        $files=IM.'/conf/'.$file.'.php';
        if(is_file($files)){
            $conf=include $files;
            self::$conf[$file]=$conf;
            return $conf;
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }
    }
}
?>