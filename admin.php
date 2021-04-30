

<?php 
    include_once("logout.php");
    session_start();
       
    if(!isset($_SESSION)){
        session_destroy();
        header('location:login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
   <div class="container mt-5">
      <button class="btn btn-danger"><a href="logout.php?logout=true">Logout</a></button>
   </div>
  
</body>
</html>