<?php 
// abstrat pour ne pas pouvoir faire :
// $c = new Connection()
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
        self::$_connection = new PDO("mysql:host=localhost;dbname=fail_page_sentences;charset=utf8", 'root', 'root');
        //to get the db of the sentences
        self::$_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        self::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$_connection;
    }

    // permet d'exécuter facilement une query
    protected function execute($query, $params= array(), $fetchMode = null)
    {
        // prépare la requete éviter injection SQL
    	$stmt = self::$_connection->prepare($query);
        // exucute la requte
    	$stmt->execute($params);

    	if ($fetchMode !== null) {
            // retourne toutes les données sous forme de tableau
    		return $stmt->fetchAll($fetchMode);
    	} else {
    		return $stmt->fetchAll();
    	}
    	return $stmt; // Iterator (forearch)
    }
}
 ?>