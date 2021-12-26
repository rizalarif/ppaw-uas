<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "prak12ppaw";
 $conn = mysqli_connect($servername, $username, $password);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE DATABASE prak12ppaw";
if (mysqli_query($conn, $sql)) {
 echo "Database created successfully";
} else {
 echo "Error creating database: ". mysqli_error($conn);
}
$conn = mysqli_connect($servername, $username, $password,$dbname);
// sql to create table
$sql = "CREATE TABLE Mahasiswa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    tugas INT(3) UNSIGNED,
    uts INT(3) UNSIGNED,
    uas INT(3) UNSIGNED,
    nilai_akhir VARCHAR(3) NOT NULL,
    grade VARCHAR(3) NOT NULL,
    reg_date TIMESTAMP)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>