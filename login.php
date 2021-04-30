<?php
require_once('store.php');

$mystore->login();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Store | Login</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>
   
    <body>
     
        <form method="post">
            <div class="container mt-5">
           
                                           
            <h6>Email</h6>
            <div class="form-group">
            <i class="fa fa-user fa-lg"></i>
            <input class="form-control w-25" name ="username"  id="username" type="email" placeholder= "Enter email address" />
            </div>                             
                              
            <h6>Password</h6>
            <div class="form-group">
            <i class="fa fa-key fa-lg"></i>
            <input class="form-control w-25" name ="password"  id="password" type="password" placeholder="Enter password" />
            </div>
                                          
                                           
                                           
            <button class="btn btn-primary"  type="submit" name ="submit">Login</button>
           
            </div>
</form>
    </body>
</html>
