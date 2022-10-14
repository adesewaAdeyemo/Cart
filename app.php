<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <div class="user">
        <form class='userForm' method="POST" action="app.php" onsubmit="return validate()">
        <div class="header">
            <h1 class='data'>Data<h1><h1 class='mellon'>mellon</h2>
        </div>
        <h1>Log in</h1>
        <p>Welcome to Datamellon, please put your login credentials below to start using the app</p>
        Email: <input type="email" name="email" value="" class='userEmail' require><br>
        Password<input type="password" name="password" value="" class='userPassword'><br/>
        <a href='' class='forget'>Forgot password</a><br>
        <hr>
        <div class="log">
        <div><input type="checkbox">Remember me</div>
        <div><input type="submit" name="'submit" value="Log in" class="logend"></div>
        </div>
        <h6>Dont have an account?<a href='user.php'>Sign up</a></h6>
        </form>

        <?php
        $email = isset($_POST["email"]) ? $_POST["email"] : "Email is empty";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        // echo $email."<br>";
        // echo $password;
        class user {
            public $email;
            public $password;
            function __construct($email, $password){
                $this->email = $email;
                $this->password = $password;
            }
            function repeat(){
                return $this->email;
            }
        }
        $user = new user($email, $password);
        echo $user->repeat();
        //append the email in a new empty array

        // $users = array($email => $password);
        // echo $users[$email];

        
        // echo count($users)




        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $name = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : 'Name is empty';
            // echo $name;
        // }
        // collect value of input field
        // $name = $_REQUEST['fname'];
        // if (empty($name)) {
        //     echo "Name is empty";
        // } else {
        //     echo $name;
        // }
        // }
        ?>
    </div>
    <script src="index.js"></script>
    </body>
</html>