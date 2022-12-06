
<?php



class DataBase{
    
    public function con(){
        $user = 'Pedro Paulo';
        $pass = 'john2004';
        $dbh = new PDO('mysql:host=localhost;dbname=bancopw', $user, $pass);
        return $dbh;

    }

    public function Select(string $login,$pass)
    {
        $statement = $this->con()->prepare("SELECT count(1),user,email,cod FROM users where BINARY user = '".$login."' and BINARY pass = '".$pass."'");
        $statement->execute();

        $users = $statement->FetchAll();
        return $users;    
    }
    public function Insert(string $sug,$cod)
    {
        $statement = $this->con()->prepare("INSERT INTO suggestions(suggestion,codUser) VALUES('".$sug."',".$cod.")");
        $statement->execute();

    }
}   
?>