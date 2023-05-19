<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
include 'connection.php';

$data = json_decode(file_get_contents("php://input"), true);
$update_id = $data['id'];
$update_nama = $data['nama'];
$update_kelas = $data['kelas'];
$update_nim = $data['nim'];

$sql = "update data set nama = '$update_nama', kelas = '$update_kelas', nim = '$update_nim' where id = '$update_id'";

if (mysqli_query($connection, $sql)) {
  echo json_encode(['msg' => 'Data Updated Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Updated!', 'status' => false]);
}

?>