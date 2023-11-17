<?php
include"connect.php";
if(isset($_POST['add1']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qurey = "insert into  ehunrtabel(email,password) values('$email','$password')";
    $rs = mysqli_query($con,$qurey);
    if($rs==1)
    {
        $msg = "sucess";
    }else{
        $msg = "erro";
    }
}

?>