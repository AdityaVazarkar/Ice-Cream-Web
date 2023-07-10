
<html>
    <form action="1.php" method="post">
        <input type="text" name="name">
        <br>
        <input type="password" name="pass">
        <br>
        <input type="submit" name="submit">

    </form>
</html>
<?php
$name = $_POST['name'];
$password = $_POST['pass'];
echo "$name";
echo "<br>";
echo "$password";
?>