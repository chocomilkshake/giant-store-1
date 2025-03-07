<?php
session_start();
if ($_SESSION['Authapp'] != session_id()) {
    header('location:index.php');
}