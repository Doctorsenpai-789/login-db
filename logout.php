<?php
// session_start();
// // require_once('store.php');
// unset($_SESSION["username"]);
// unset($_SESSION["password"]);
// session_destroy();
// header("location:login.php");
  


    // header("location:admin.php");
    // session_destroy();
if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php?logout=true");

}
   

?>