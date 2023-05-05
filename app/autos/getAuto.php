<?php

require '../../config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id_autos, placa, marca, color, año FROM autos WHERE id_autos=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$autos = [];

if ($rows > 0) {
    $autos = $resultado->fetch_array();
}

echo json_encode($autos, JSON_UNESCAPED_UNICODE);