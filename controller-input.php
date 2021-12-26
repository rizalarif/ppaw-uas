<?php


session_start();

include 'koneksi.php';
$data;
$nama = $_POST['name'];
$nim = (int)$_POST['nim'];
$tt = (int)$_POST['tugas'] * 30 / 100;
$uts = (int)$_POST['uts'] * 30 / 100;
$uas = (int)$_POST['uas'] * 40 / 100;
$na = $tt + $uts + $uas;

if ($na >=  80 && $na <= 100) {
    $grade = 'A';
} else if ($na >= 70 && $na < 80) {
    $grade = 'B';
} else if ($na >= 60 && $na < 70) {
    $grade = 'C';
} else {
    $grade = 'D';
}

$sql = "INSERT INTO Mahasiswa (name, nim, tugas, uts, uas, nilai_akhir, grade)
VALUES ('" . $nama . "', '" . $nim . "', '" . (int)$_POST['tugas'] . "', '" . (int)$_POST['uts'] . "', '" . (int)$_POST['uas'] . "', '" . $na . "', '" . $grade . "')";
if (mysqli_query($conn, $sql)) {

    $_SESSION['flash_message'] = "I'm a flash message'";
    header("location:javascript://history.go(-1)");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
