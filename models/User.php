<?php 
  require_once("Connection.php");
  class Users extends Connection{
    protected $id;
    protected $login;
    private $password;
    protected $connId;

    public function getUserId($login, $password)
    {
      $request = "SELECT id, password FROM users WHERE login = :login";
      $params = array(
        ":login" => $login
      );
      $tab = $this->execute($request, $params);
      // echo $tab[0]["pwd"];
      // echo $password;
      if ($password === $tab[0]["pwd"]) {
        $request = "UPDATE users SET actif=1 WHERE id = :id";
        $params = array(
          ":id" => $tab[0]["id"]
        );
        $this->execute($request, $params);
        $_SESSION["nom"] = $login;
        $_SESSION["id"] = $tab[0]["id"];

        $this->id = $tab[0]["id"];
        $this->login = $login;
        
        return true;
      } else {
        return false;
      }		
    }
  }

?>