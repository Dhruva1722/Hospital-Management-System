<<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$pName = $_POST['pName'];
$disease = $_POST['disease'];
$age = $_POST['age'];
$roomNo = $_POST['roomNo'];
$pAddress = $_POST['pAddress'];
$gender = $_POST['gender'];

$sql = "INSERT INTO patient (pName, disease, Age, Roomno, pAddress, Gender)
VALUES ('$pName', '$disease', $age, $roomNo, '$pAddress', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "Data added successfully!";
} else {
    echo "Error adding data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
