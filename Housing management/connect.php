<?php
$email=$_POST["email"];
$password=$_POST["password"];
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(email,password) values(?,?)");
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $conn->close();
        
}
?>