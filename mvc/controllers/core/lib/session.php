<?php

class Session

{

  public static function init()

  {

    if (version_compare(phpversion(), '5.4.0', '<')) {

      if (session_id() == '') {

        session_start();

      }

    } else {

      if (session_status() == PHP_SESSION_NONE) {

        session_start();

      }

    }

  }



  public static function set($key, $val)

  {

    $_SESSION[$key] = $val;

  }



  public static function get($key)

  {

    return isset($_SESSION[$key]) ? $_SESSION[$key] : false;

  }



  public static function checkSession()

  {

    self::init();

    if (self::get("login") == false) {

      self::destroy();

      self::redirect("https://it-zone.club/");

    }



    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1200)) {

      self::destroy();

      self::redirect("https://it-zone.club/");

    }



    $_SESSION['last_activity'] = time();

  }



  public static function checkLogin()

  {

    self::init();

    if (self::get("login") == true) {

      self::redirect("https://it-zone.club/Home/Dashboard");

    }

  }



  public static function destroy()

  {

    session_destroy();

    self::redirect("https://it-zone.club/Account/LoginForm");

  }



  public static function redirect($url)

  {

    ob_start();

    if (!empty($url)) header("location: {$url}");

    ob_end_flush();

  }

}