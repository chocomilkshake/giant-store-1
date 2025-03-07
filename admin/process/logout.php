<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    session_unset();
    session_destroy();
    echo '<script>
                alert("Logout Successfully");
                window.location.href="../index.php";
                </script>';
}