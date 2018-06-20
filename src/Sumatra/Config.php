<?php

namespace Sumatra;

/**
 * Class Config.
 */
class Config
{
    /**
     * @var mixed|null
     */
    private $config = null;

    /**
     * @var string
     */
    private $file;

    /**
     * @var array
     */
    private static $instance = [];

    /**
     * Config constructor.
     *
     * @param string $file
     */
    private function __construct(string $file)
    {
        $this->file = $file;

        if (file_exists($file)) {
            $this->config = require $file;
        }
    }

    /**
     * Load Config instance by config file
     * @param string $file
     *
     * @return Config
     */
    public static function load(string $file): self
    {
        if (isset(static::$instance[$file]) && static::$instance[$file] instanceof self) {
            return static::$instance[$file];
        }

        static::$instance[$file] = new static($file);

        return static::$instance[$file];
    }

    /**
     * Get value from config by key or return array from config
     * @param string|null $value
     *
     * @return mixed|null
     */
    public function get(string $value = null)
    {
        if ($value !== null) {
            return is_array($this->config) && isset($this->config[$value]) ? $this->config[$value] : null;
        }

        return $this->config;
    }
}
