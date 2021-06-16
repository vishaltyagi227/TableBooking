<?php
    if(!isset($_POST["submit"]))
    {
        header("location:Home.php");
        exit();
    }
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    $ser="localhost";
    $u="root";
    $p="";
    $db="cafebiblio";
    $con=new mysqli($ser,$u,$p,$db);
    $sq="select * from userinformation where email='$email'";
    $rs=$con->query($sq);
    $c=$rs->num_rows;
    if($c==0){
    $sq="insert into Userinformation values('$name','$email','$password')";
    if($con->query($sq))
    {
        session_start();
        unset($_SESSION['signupverify']);
        header("location:Signin.php?name=successfull");
    }
    else
    {
        echo "Not inserted";
    }

    }
    else
    {   
        session_start();
        $_SESSION['signupverify']=true;
       header("location:Signup.php");
    }
?>