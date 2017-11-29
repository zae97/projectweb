<?
session_start();
 $_SESSION['sess_id'];
 $_SESSION['nama'];

 unset($_SESSION['sess_id']);
 unset($_SESSION['nama']);

session_unset();
session_destroy();

header("location:../login.php");
exit();
?>