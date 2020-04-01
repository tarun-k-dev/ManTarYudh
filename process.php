<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $link =  mysqli_connect("127.0.0.1","root" , "" , "login");

    $result = mysqli_query($link , "select * from users where username = '$username' and password = '$password' ") 
                or die("Failed to query database ".mysqli_error($link));
    $row = mysqli_fetch_array($result);

    if($row['username'] == $username && $row['password'] == $password ){
        echo "Login successfull!!! Welcome ".$row['username'];
    }
    else{
        echo "Failed to login!";
    }




?>