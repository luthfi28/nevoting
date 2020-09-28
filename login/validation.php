<?php

include '../connection.php';

if(isset($_POST['nis'])){
    session_start();

    $nis = $_POST['nis'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE nis='$nis' AND password='$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['nis'] = $nis;
        $row = $result->fetch_assoc();
        $_SESSION['nama'] = $row['nama'];
        header("Location: ../");
    } 
    else {
        header("Location: ../login?code=1");
    }

    $conn->close();
} else {
    header("Location: ../login");
}

?>