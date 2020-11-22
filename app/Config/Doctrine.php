<?<?php 

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Config\Paths;

class Doctrine extends BaseConfig
{
    public bool $debug = false;

    public bool $setAutoGenerateProxyClasses = true;

    /*
     * Methods "Redis, Memcached", "File" or "null"
     */
    public ?string $cache = null;

    /*
     * Ports
     * for Redis : 6379
     * for Memcached : 11211
     */
    public ?int $portCache = null;

    public ?int $hostCache = null;

    /*
     * Index of redis database
     */
    public int $databaseRedis = 0;

    /*
     * Path to writable cache directory
     */
    public string $writablePath = realpath(Paths::$writableDirectory . DIRECTORY_SEPARATOR . "doctrine" . DIRECTORY_SEPARATOR);

    /*
     * Namespace of Redis database or name of Memcached server
     */
    public string $namespaceCache = "name";

}