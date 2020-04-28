<?php
namespace core\lib\drive\log;
// 文件系统
use core\lib\conf;

class file{
    public $path;// 日志存储位置

    public function __construct()
    {
        $conf=conf::get('OPTION','log');
        $this->path=$conf['PATH'];
    }

    public function log($name,$file='log'){
        /**
         * 1.确定文件存储目录是否存在
         *   新建文件
         * 2.写入日志
         */
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),'0777',true);
        }
        $name=date('Y-m-d H:i:s').' '.json_encode($name).PHP_EOL;
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',$name,FILE_APPEND);
    }
}
?>