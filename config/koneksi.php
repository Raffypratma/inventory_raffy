<?php 

$hostname = 'localhost';
$username = 'root';
$passworrd = '';
$db_name = 'dbinventory_raffy';

$conn = mysqli_connect($hostname,$username,$passworrd,$db_name);

if(!$conn){
    die('koneksi gagal.' . mysqli_connect_error());
}