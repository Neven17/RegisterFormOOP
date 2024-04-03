<?php 


class LoginModel {



    private $pdo;

    public function __construct($dbConnection){

        $this->pdo=$dbConnection;

    }


public function provjeraLogin($brojMob, $lozinka)
{
    $query = "SELECT * FROM users WHERE brojMob=:brojMob";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(":brojMob", $brojMob);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($lozinka, $user['lozinka'])) {
        return true;
    } else {
        return false;
    }
    
}
}




?>