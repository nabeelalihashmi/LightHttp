<?php

namespace IconicCodes\LightHttp;

class LSession {
  private static function register_secure_handler() {
    session_set_save_handler(new LSecureSessionHandler());
  }

  public static function __callStatic($name, $arguments) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    return call_user_func_array([self::class, 'e' . $name], $arguments);
  }

  private static function eexists($name) {
    return (isset($_SESSION[$name])) ? true : false;
  }

  private static function eget($name) {
    if (!self::exists($name)) return NULL;
    return is_array($_SESSION[$name]) ?  LHttpHelper::arrayToObject($_SESSION[$name]) :  $_SESSION[$name];
  }

  private static function eset($name, $value) {
    return $_SESSION[$name] = $value;
  }

  private static function edelete($name) {
    if (self::exists($name)) {
      unset($_SESSION[$name]);
    }
  }

  private static function euagent($no_version = true) {
    $uagent = $_SERVER['HTTP_USER_AGENT'];
    if ($no_version) {
      $regx = '/\/[a-zA-Z0-9.]+/';
      $uagent = preg_replace($regx, '', $uagent);
    }
    return $uagent;
  }
}
