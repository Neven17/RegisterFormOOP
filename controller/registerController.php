<?php

    require "../model/UserModel.php";
    require "../view/registerView.php";
    require "../DBConnection.php";

    $userModel=new UserModel($pdo);

    if ($_SERVER['REQUEST_METHOD']==="POST")
    {
        $ime=$_POST['ime'];
        $prezime=$_POST['prezime'];
        $brojMob=$_POST['brojMob'];
        $lozinka=$_POST['lozinka'];
        $ponLozinka=$_POST['ponLozinka'];

        $provjeraBroja=$userModel->dohvatiUseraPoBroju($brojMob);

        if ($lozinka===$ponLozinka)
        {

            if($provjeraBroja==null){

                $hashLozinka=password_hash($lozinka, PASSWORD_DEFAULT);
                $userModel->createUser($ime, $prezime, $brojMob, $hashLozinka);
                echo "Registracija USPJEŠNA";

            }else {
                echo "Broj vec postoji";
            }
        } 
        else
        {
            echo "Lozinka se ne podudaraju!";
        }
    }

    include "../view/loginView.php";

?>