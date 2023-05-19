<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
include 'connection.php';

$data = json_decode(file_get_contents("php://input"), true);
$create_nama = $data['nama'];
$create_kelas = $data['kelas'];
$create_nim = $data['nim'];

$sql = "insert into data (nama, kelas, nim) values ('$create_nama', '$create_kelas', '$create_nim')";

if (mysqli_query($connection, $sql)) {
  echo json_encode(['msg' => 'Data Inserted Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Inserted!', 'status' => false]);
}
?>