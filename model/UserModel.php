<?php

    class UserModel
    {
        private $pdo;

        public function __construct($dbConnection)
        {
            $this->pdo=$dbConnection;
        }

        public function createUser($ime, $prezime, $brojMob, $hashLozinka)
        {
            $stmt=$this->pdo->prepare("INSERT INTO users(ime, prezime, brojMob, lozinka) VALUES (:value1, :value2, :value3, :value4)");
            $stmt->bindParam(":value1",$ime);
            $stmt->bindParam(":value2",$prezime);
            $stmt->bindParam(":value3",$brojMob);
            $stmt->bindParam(":value4",$hashLozinka);

            $stmt->execute();
        }

        public function dohvatiUseraPoBroju($brojMob){
            $query="SELECT * FROM users WHERE brojMob=:brojMob";
            $stmt=$this->pdo->prepare($query);
            $stmt->bindParam(":brojMob", $brojMob);
            $stmt->execute();
          return $stmt->fetch(PDO::FETCH_ASSOC);


        }



    }

?>