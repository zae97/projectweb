<?php
session_start();
require 'koneksi.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama, 
                         level_user, 
                         id_user 
                  FROM tb_login
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $level_user, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['nama']       = $nama;
            
        }


        $check_log->close();

        header('location:home-'.$level_user.'.php');
        exit();

    } else {
        header('location: login.php?error='.base64_encode('Username dan Password salah'));
        exit();
    }

   
} else {
    header('location:login.php');
    exit();
}