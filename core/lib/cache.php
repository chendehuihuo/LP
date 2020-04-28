<?php

namespace core\lib;

use Doctrine\Common\Cache\ApcCache;
use Doctrine\Common\Cache\MemcacheCache;
use Doctrine\Common\Cache\MemcachedCache;
use Doctrine\Common\Cache\RedisCache;
use Doctrine\Common\Cache\XcacheCache;

class cache
{

    public $cache;
    public $data;

    public function __construct()
    {
        // 确定存储方式
        $select = conf::get('select', 'cache');
        $this->data = conf::get($select, 'cache');
        $this->$select();
    }

    public function redis()
    {
        $driver = new \Redis();
        $driver->connect($this->data['HOST'], $this->data['PORT']);
        $this->cache = new RedisCache();
        $this->cache->setRedis($driver);
    }

    public function memcache($data)
    {
        $driver= new \Memcache();
        $driver->connect($this->data['HOST'], $this->data['PORT']);
        $this->cache = new MemcacheCache();
        $this->cache->setMemcache($driver);
    }

    public function memcached($data)
    {
        $driver = new \Memcached();
        $driver->addServer($this->data['HOST'], $this->data['PORT']);
        $this->cache = new MemcachedCache();
        $this->cache->setMemcached($driver);
    }
}

?>