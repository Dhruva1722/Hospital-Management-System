<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'hospital';
$tablename = 'patient';
$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM patient WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
