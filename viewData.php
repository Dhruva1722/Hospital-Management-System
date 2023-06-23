<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'hospital';
$tableName = 'patient';
$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM $tableName";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<table><tr><th>ID</th><th>Name</th><th>Disease</th><th>Age</th><th>Room No</th><th>Address</th><th>Gender</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["id"]."</td><td>".$row["pName"]."</td><td>".$row["disease"]."</td><td>".$row["Age"]."</td><td>".$row["Roomno"]."</td><td>".$row["pAddress"]."</td><td>".$row["Gender"]."</td><td><button  onclick='deleteData(".$row["id"].")'>Delete</button></td></tr>";
    }  echo "</table>";
     } else {
        echo "No data found.";
     }

mysqli_close($conn);
?>
