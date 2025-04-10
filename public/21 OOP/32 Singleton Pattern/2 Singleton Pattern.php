<!-- 

    Real İstifadə Misalı
    Konfiqurasiya Meneceri

-->

<?php

    class Config {
        private static $instance = null;
        private $settings = [];

        private function __construct() {}

        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new Config();
            }
            return self::$instance;
        }

        public function set($key, $value) {
            $this->settings[$key] = $value;
        }

        public function get($key) {
            return $this->settings[$key] ?? null;
        }
    }

    $config = Config::getInstance();
    $config->set("app_name", "My Application");

    echo $config->get("app_name"); // My Application

    $config2 = Config::getInstance();
    echo $config2->get("app_name"); // My Application (Eyni obyekt istifadə olunur)
