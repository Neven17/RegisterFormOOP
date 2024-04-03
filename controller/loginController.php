<?php 


include "../DBConnection.php";
include "../model/LoginModel.php";



if(isset($_POST['submit-login'])){
    
    $brojMob=$_POST['brojMob'];
    $lozinka=$_POST['lozinka'];
    
    
    
    $loginModel=new LoginModel($pdo);
    $korisnikProvjera=$loginModel->provjeraLogin($brojMob, $lozinka);


    if($korisnikProvjera==TRUE){

        header("Location: ../view/loginUspjesnoView.php");

    }else {

        echo "Neuspješna prijava";
    }





}







?>