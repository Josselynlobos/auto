<?php

session_start();

require '../../config/database.php';

$id = $conn->real_escape_string($_POST["id"]);

$sql = "DELETE FROM autos WHERE id_autos = $id";
if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Auto eliminado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar el auto";
}

header('Location: index.php');