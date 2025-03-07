<?php

/**
 * Description  : Main script for redirection to the correct directory
 * Author       : JOHN MICHAEL mASMELA.
 * Date Created  : MARCH. 17, 2023
 * Date Modified : MARCH. 17, 2023
 * Revised By   : JOHN MICHAEL mASMELA. 
 */



/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'xwhylhzb_crempco_jm');
define('DB_PASSWORD', '[z0z6}B~@G(q');
define('DB_DATABASE', 'xwhylhzb_giant_storedb');
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$con->set_charset("utf8mb4");
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'giantstore_db');
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$con->set_charset("utf8mb4");

