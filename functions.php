<?php 

function koneksi() {
    $conn = mysqli_connect('localhost','root','','db_waste') or die('Koneksi ke database gagal!'); 

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {  
    $rows[] = $row;
    }

    return $rows;
}