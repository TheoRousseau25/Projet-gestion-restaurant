<?php
class Connexion
{
  private static $db;

  public static function get()
  {
    try {
      if (empty(self::$db)) {
        $dbOptions = [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        self::$db = new PDO('mysql:dbname=rousse212u_restaurant;host=devbdd.iutmetz.univ-lorraine.fr', "rousse212u_appli", "32019691");
      }
      return self::$db;
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }
}
