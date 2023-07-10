

<?php
$name = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$pass = $_POST['password'];

$host='localhost' ;
$user = 'root';
$pass = 'Aditya@02';
$database = 'test';


$conn = mysqli_connect($host,$user,$pass,$database);
   if(!$conn){
    die("Connection Faile:" . mysqli_connect_error());
} else {
    echo "Connection Successfully";
    $stmt = $conn->prepare("INSERT INTO register(Firstname,Lastlname,email,password) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$name,$last,$email,$pass);
    $stmt->execute();
    echo "registration successfully..";
    $stmt->close();
    $conn->close();
    header('Location:Login.html');
}


// echo "$name";
// echo "<br>";
// echo "$last";
// echo "<br>";
// echo "$email";
// echo "<br>";
// echo "$pass";
?>