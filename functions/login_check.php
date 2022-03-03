<?php
include_once 'session.php';
require 'database.php';
$email = $_POST['email'];
$pass = $_POST['pass'];


if (!empty($email) && !empty($pass)) {
 //$pass = sha1($pass.$salt);
 $query = "SELECT * FROM uporabniki WHERE email=?";
 $stmt = $pdo->prepare($query);
 $stmt->execute([$email]);



 if ($stmt->rowCount() == 1) {
     $user = $stmt->fetch();

     if (password_verify($pass, $user['password'])) {
         $_SESSION['user_id'] = $user['id'];

         $_SESSION['ime'] = $user['ime'];
         $_SESSION['priimek'] = $user['priimek'];

         $_SESSION['email'] = $user['email'];


         header("Location: ../");
         echo 'uspesna prijava';
         die;
       }else{
         header("Location: ../login-form.php?error=Password is Incorect&un=$usern");
	        exit();
       }
   }
}


header("Location: ../login-form.php?error=Username is Incorect");
echo 'neuspesna prijava';
?>
