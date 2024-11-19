<?php
 require_once('db.php');
$number = $_POST['number'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if ($pass != $repeatpass){
    echo "чел пароли разные";
} else {

    $sql_check = "SELECT * FROM `devyatov_231` WHERE number = '$number'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "номер телефона уже зарегистрирован";
    } else {
        $sql = "INSERT INTO `devyatov_231` (number, pass) VALUES ('$number', '$pass')";
        if ($conn->query($sql) === TRUE) {
            echo "успешная регистрация";
        }
    }
}

?>