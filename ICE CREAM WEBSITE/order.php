<?php
$FullName = $_POST['name'];
$IceCreamName = $_POST['Iname'];
$Topings = $_POST['topings'];
$Address = $_POST['add'];
$Phone = $_POST['pho'];
$Quantity = $_POST['qu'];
$Date = $_POST['date'];





    $host='localhost' ;
    $user = 'root';
    $pass = 'Aditya@02';
    $database = 'test';
    
   $conn = mysqli_connect($host,$user,$pass,$database);
   if(!$conn){
    die("Connection Faile:" . mysqli_connect_error());
} else {
    echo "Connection Successfully";
    $stmt = $conn->prepare("INSERT INTO order1(FullName,IceCream,Toping,Phone,Quantity,Date,address) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$FullName,$IceCreamName,$Topings,$Phone,$Quantity,$Date,$Address);
    $stmt->execute();
    echo "registration successfully..";
    $stmt->close();
    $conn->close();
    header('Location:index.html');
}
?>