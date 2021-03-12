<?php
    
    require_once('connection.php') ;
    session_start() ;

    $username = $_POST["userm"];
    $pass_1 = $_POST["passd"] ;

    /// query from database 

    $sql = "SELECT * from employe where username = '$username' and pass = '$pass_1' ";


    if(isset($_POST["login"]))
    {
        if(empty($username or $pass_1))
        {
            header("location:index.php?Empty= Please fill in the blanck");
        }
        else{
            
            $result =mysqli_query($conn , $sql) ;

            $cnt = mysqli_fetch_assoc($result);

            if($cnt)
            {   
                $_SESSION['User'] = $_POST['userm'];
                header("location:welcome.php");

            }
            else{
                header("location:index.php?Invalid= Please Enter Correct Password and Username");

            }

        }
    }
    else{
        echo("Not Working ");
    }



?>