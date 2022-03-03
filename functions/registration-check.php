<?php
require 'database.php';
include_once 'session.php';



$email = $_POST['email'];
$ime = $_POST['name'];
$priimek = $_POST['surname'];
$pass = $_POST['pass'];
$use = 1;
$role = 0;
$dt=date('Y-m-d H:i:s');



if (!empty($pass) && !empty($ime)  && !empty($priimek))
{

    if (!empty($email)) {
     //$pass = sha1($pass.$salt);
     $query = "SELECT id FROM uporabniki WHERE email=?";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$email]);

     if ($stmt->rowCount() > 0 ) {
       header("Location: ../index.php?error=Sorry that Email is already is taken");
       exit();
     }

    }


    $stmt = $pdo->query('SELECT email FROM uporabniki');

    while ($row = $stmt->fetch()) {
        if ($email != $row['email']) {
            $use = 0;
          }else{
            $use = 1;
          }
    }

      //preverim podatke, da so obvezi vnešeni
      if (($use == 0)) {
          //$pass = sha1($pass1.$salt);
          $pass = password_hash($pass, PASSWORD_DEFAULT);
          $query = 'INSERT INTO uporabniki (email,password,ime,priimek,created_at,vloga) VALUES (?,?,?,?,?,?)';
          $pdo->prepare($query)->execute([$email, $pass, $ime, $priimek,$dt,$role]);

          $query2 = "SELECT * FROM uporabniki WHERE email=?";
          $stmt2 = $pdo->prepare($query2);
          $stmt2->execute([$email]);



          if ($stmt2->rowCount() == 1) {
              $user = $stmt2->fetch();

          $_SESSION['user_id'] = $user['id'];
          $_SESSION['ime'] = $user['ime'];
          $_SESSION['priimek'] = $user['priimek'];
          $_SESSION['email'] = $user['email'];
        }
          echo "kul";
      header("Location: ../index.php");
      }


}else{
  header("Location: ../index.php?error=Pleae enter your data");
  exit();

}
?>
