<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "prak12ppaw";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$table = 'Mahasiswa';
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'id','dt' => 0 ),
    array( 'db' => 'nim','dt' => 1 ),
    array( 'db' => 'name','dt' => 2 ),
    array( 'db' => 'tugas','dt' => 3 ),
    array( 'db' => 'uts', 'dt' => 4 ),
    array( 'db' => 'uas', 'dt' => 5 ),
    array( 'db' => 'nilai_akhir', 'dt' => 6),
    array( 'db' => 'grade', 'dt' => 7),
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'prak12ppaw',
    'host' => 'localhost'
);
require('ssp.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>