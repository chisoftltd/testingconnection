<?php
/**
 * Created by PhpStorm.
 * User: Chisoft
 * Date: 2017-10-20
 * Time: 13:19
 */


$servername = "109.228.40.47:53306";
$username = "ccms_test";
$password = "ccms_test2!%%^";
$dbname = "councilDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>