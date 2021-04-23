<?php

require_once('store.php');

$mystore->login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store | Login</title>

    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="form-container">
         <form action="" method="post">
         
   <div class="form-input">
   <label for="">Username</label>
   <input type="text" name ="username"  id="username" >

   </div>
   <div class="form-input">
   <label for="">Password</label>
   <input type="password" name ="password"  id="password">
   </div>
   <button type="submit" name ="submit">Login</button>
         
         </form>     
      
      </div>
    </div>
</body>
</html>