<?php 
  abstract class Connection {
    private static $_connection;

    public function __construct()
    {
      $this->dbConnection();
    }

    protected function dbConnection()
      {
        if (self::$_connection !== null) {
          return self::$_connection;
        }

          self::$_connection = new PDO("mysql:host=localhost;dbname=plantchi;charset=utf8", 'root', '');
          self::$_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          return self::$_connection;
      }

      protected function execute($query, $params= array(), $fetchMode = null)
      {
        $statement = self::$_connection->prepare($query);
        $statement->execute($params);

        if ($fetchMode !== null) {
          return $statement->fetchAll($fetchMode);
        } else {
          return $statement->fetchAll();
        }
        return $statement; // Iterator (forearch)
      }
  }

?>