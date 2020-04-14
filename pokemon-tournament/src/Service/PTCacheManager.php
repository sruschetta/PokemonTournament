<?php

namespace App\Service;

use Symfony\Component\Cache\Adapter\RedisTagAwareAdapter;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Contracts\Cache\ItemInterface;


class PTCacheManager {

    private $cache;

    public function __construct()
    {
        $client = RedisTagAwareAdapter::createConnection(
            'redis://redis:6379'
        );

        $this->cache = new RedisTagAwareAdapter($client, $namespace = '', $defaultLifetime = 0);
    }

    /**
     * @return RedisAdapter
     */
    public function getCache() {
        return $this->cache;
    }


}