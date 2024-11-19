<?php
 require_once('db.php');
$number = $_POST['number'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `devyatov_231` WHERE number = '$number' AND pass = '$pass'";
$conn -> query($sql);

$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "добро пожаловать, " . $row['number'];
    }
} else {
    echo "нет такого пользователя";
}


?>