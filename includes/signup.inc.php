<?php
    if(isset($_POST['signup_submit'])){
        include_once 'dbh.inc.php';

        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $pass = $_POST['pwd'];
        $passRepeat = $_POST['pwd-repeat'];

        if(empty($first) || empty($last) || empty($mail) || empty($username) || empty($pass) || empty($passRepeat)){
            header("LOCATION: ../signup.php?error=emptyfields&firstname=".$first."&lastname=".$last."&mail=".$mail."&username=".$username);
            exit();
        }else if(filter_var($email, FILTER_VAVLIDATE_EMAIL) && preg_match("/^/[a-zA-Z0-9]*$",$username)){
            header("LOCATION: ../signup.php?error=invalidmailuid&firstname=".$first."&lastname=".$last."&mail=".$mail."&username=".$username);
            exit();
        }else if(filter_var($email, FILTER_VAVLIDATE_EMAIL)){
            header("LOCATION: ../signup.php?error=invalidmail&firstname=".$first."&lastname=".$last."&mail=".$mail."&username=".$username);
            exit();
        }else if(preg_match("/^/[a-zA-Z0-9]*$",$username)){
            header("LOCATION: ../signup.php?error=invalidmail&firstname=".$first."&lastname=".$last."&mail=".$mail."&username=".$username);
            exit();
        }else if($pass !== $passRepeat){
            header("LOCATION: ../signup.php?error=differentpasswords&firstname=".$first."&lastname=".$last."&mail=".$mail."&username=".$username);
            exit();
        }else{
            $sql = "SELECT "
        }
    }
     