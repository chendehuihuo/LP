<?php
namespace core\lib;

class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应控制器和方法
         */
        if(isset($_SERVER['PATH_INFO'])&&$_SERVER['PATH_INFO']!='/'){
            $path=$_SERVER['PATH_INFO'];
            $patharr=explode('/',trim($path,'/'));
            if(isset($patharr[0])&&!empty($patharr[0])){
                $this->ctrl=$patharr[0];
                unset($patharr[0]);
            }else{
                $this->ctrl=conf::get('CTRL','route');
            }
            if(isset($patharr[1])&&!empty($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action=conf::get('ACTION','route');
            }
            // URL多余参数部分转换成GET
            $count=count($patharr)+2;
            $i=2;
            while ($i<$count){
                if (isset($patharr[$i+1])){
                    $_GET[$patharr[$i]]=$patharr[$i+1];
                }
                $i+=2;
            }
        }else{
            $this->ctrl=conf::get('CTRL','route');;
            $this->action=conf::get('ACTION','route');;
        }
    }
}
?>