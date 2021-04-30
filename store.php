<?php

class MyStore{

    private $server ="mysql:host=localhost;dbname=plantsdb";
    private $user ="root";
    private $pass = "";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         );

         protected $connection;
         
         public function openConnection(){
             try {
                 $this->connection = new PDO(
                     $this->server,
                     $this->user,
                     $this->pass,
                     $this->options
                 );
//echo "Connection Success ";

                 return $this->connection;
             } catch (PDOException $error) {
                 echo "Error connection: ".$error ->getMessage();
             }
         }

         public function closeConnection(){
             $this->$connection = null;

         }
         public function getUsers(){
             $connection = $this->openConnection();
             $statement = $connection -> prepare("SELECT * FROM users");
             $statement ->execute();
             $users = $statement -> fetchAll();
             $usersCount = $statement->rowCount();



             if($usersCount>0){
                 return $users;
                // echo "<br>";
             }else{
                 return 0;
             }
         } //end get user

         public function login(){
             if (isset($_POST['submit'])) {
                 $username = $_POST['username'];
                 $password = $_POST['password'];


                $connection = $this -> openConnection();
                $statement = $connection->prepare ("SELECT * FROM 
                users WHERE email =? AND password =?");
                $statement->execute([$username,$password]);
                $user = $statement ->fetch();
                $total = $statement->rowCount();


                if ($total>0){
                    // echo "Welcome ".$user['first_name']."".$user
                    //  ['last_name'];
                    
                    header('location:admin.php');

                }
                else {
                   // echo "Login failed";
                  // echo "<script type='text/javascript'>alert('Log in failed');</script>";

                }
             }
         }

        function logout(){
            
        }
}

$mystore = new MyStore();




?>