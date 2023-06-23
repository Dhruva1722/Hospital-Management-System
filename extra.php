<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'hospital';
$tableName = 'patient';
$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['id']) && isset($_POST['field']) && isset($_POST['newValue'])) {
    $id = $_POST['id'];
    $field = $_POST['field'];
    $newValue = $_POST['newValue'];

    $sql = "UPDATE patient SET $field='$newValue' WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully!";
    } else {
        echo "Error: ".mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
