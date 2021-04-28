<?php

/**
 * Template File Doc Comment
 * 
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
$servername = "localhost";
$username = "root";
$password = "";
$database = "clicktocall";
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
} else {
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name'] && $_POST['email'] && $_POST['number'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];

            if (mysqli_query($conn, "INSERT INTO userdata (Name, Email, Number) VALUES ('$name', '$email', '$number')"));
            {
                echo "Data Inserted Successfully!";
            }
        }
    }
}
?>