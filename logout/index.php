<?php
    session_start();
    $_SESSION['nis'] = '';
    unset($_SESSION['nis']);
    session_unset();
    session_destroy();
    header("Location: ../login?code=2");
?>