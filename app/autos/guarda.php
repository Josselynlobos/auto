<?php

session_start();

require '../../config/database.php';


$id = $conn->real_escape_string($_POST["id"]);
$placa = $conn->real_escape_string($_POST["placa"]);
$marca = $conn->real_escape_string($_POST["marca"]);
$color = $conn->real_escape_string($_POST["color"]);
$año = $conn->real_escape_string($_POST["año"]);



$sql = "INSERT INTO autos (id_autos, placa, marca, color, año)
VALUES ('$id','$placa','$marca','$color','$año')";
if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";

    if($_FILES['foto']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg","image/png");
        if(in_array($_FILES['foto']['type'],$permitidos)){
            $dir = "foto";

            #$info_img = pathinfo($_FILES['foto']['name']);
            #$info_img['extension'];

            $foto = $dir .'/'.$id.'.jpg'; #construir ubicacion y nombre de la imagen

            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }

            if(!move_uploaded_file($_FILES['foto']['tmp_name'],$foto)){
                $_SESSION['msg'] .="<br> Error al guardar imagen";
            }
        }else{
            $_SESSION['msg'] .="<br> Formato de imagen no permitido";
        }
    }
   
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guarda imágen";
}

header('Location: index.php');