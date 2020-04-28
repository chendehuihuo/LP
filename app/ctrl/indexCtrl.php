<?php

namespace app\ctrl;

use app\models\nameModel;
use core\im;
use core\lib\conf;
use Doctrine\Common\Cache\RedisCache;

class indexCtrl extends im
{
    public function index()
    {
//        $model = new nameModel();
//        $ret = $model->lists();
//        $cacheDriver=self::$cache;
////        dump( );
//        dump( $cacheDriver->save('namna',1213));
//        dump( $cacheDriver->fetchMultiple(array('namna','nana')));
        $title = '试图文件第一次';
        $this->assign('title', $title);
        $this->display('index/index.html');
    }
}

?>