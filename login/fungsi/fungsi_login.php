<?php
session_start();
include 'koneksi.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {
    $sql_check = "SELECT id_user, 
                         level
                  FROM user 
                  WHERE 
                       email=?  
                       AND 
                       password=md5(?) 
                  LIMIT 1";
    
    $check_log = $conn->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($id_user, $level);

        while ( $check_log->fetch() ) {
            $_SESSION['level'] = $level;
            $_SESSION['id_user'] = $id_user;
            $_SESSION['login'] = 1;
        }

        $check_log->close();

        if ($level == 'customer') {
          header('location:../../index.php');
          exit();
        }elseif ($level == 'seller' || $level == 'admin') {
          header('location:../../back/index.php');
          exit();
        }

    }else{
      header('location:../index.php?error=true');
    }
}
?>