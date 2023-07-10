<?php
$email = $_POST['uname'];
$password = $_POST['psw'];


echo "$email";
    
//     $host='localhost' ;
//     $user = 'root';
//     $pass = 'Aditya@02';
//     $database = 'test';
    
//    $conn = mysqli_connect($host,$user,$pass,$database);
//    if(!$conn){
//     die("Connection Faile:" . mysqli_connect_error());
// } else {
//     echo "Connection Successfully";
//     $stmt = $conn->prepare("INSERT INTO login(email,password) VALUES (?,?)");
//     $stmt->bind_param("ss", $email, $password);
//     $stmt->execute();
//     echo "registration successfully..";
//     $stmt->close();
//     $conn->close();
//     header('Location:index.html');
// }
?>
