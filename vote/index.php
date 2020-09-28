<?php
include '../connection.php';

session_start();
$noUrut = $_GET['i'];
$pemilih = $_SESSION['nis'];

if(isset($pemilih) && isset($noUrut)){
    $cek = "SELECT * FROM result WHERE pemilih='$pemilih'";
    $result = $conn->query($cek);
    echo($result->num_rows);
    if ($result->num_rows > 0) {
        echo "
        <script type='text/JavaScript'>  
            if (confirm('Gagal: anda sudah pernah memilih.')) {
                window.location.href = '../';
            }
        </script>
        ";
    } 
    else {
        $sql = "INSERT INTO result VALUES('$pemilih', '$noUrut')";
     
        if ($conn->query($sql) === TRUE) {
            header("Location: ../");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
} else {
    header("Location: ../");
}

?>