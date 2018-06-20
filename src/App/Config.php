<?php


namespace App;


class Config
{
    private $config = null;

    private $file;

    private static $instance = [];

    private function __construct(string $file)
    {
        $this->file = $file;


        if (file_exists($file)) {
            $this->config = require $file;
        }

    }

    public static function load(string $file): self
    {


        if (isset(static::$instance[$file]) && static::$instance[$file] instanceof self) {
            return static::$instance[$file];
        }

        static::$instance[$file] = new static($file);

        return static::$instance[$file];
    }


    public function get(string $value = null)
    {

        if ($value !== null) {
            return is_array($this->config) && isset($this->config[$value]) ? $this->config[$value] : null;
        }

        return $this->config;
    }

}