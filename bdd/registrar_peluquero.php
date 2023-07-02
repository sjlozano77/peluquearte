<?php

require("../conexion/conectar.php");

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
//$fechaNacimiento = date('Y-m-d', strtotime($_POST['fecha']) );

$fechaNacimiento = $_POST['fecha'];

echo $fechaNacimiento;
echo "<br>";
copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
//$foto =  $_FILES['file']['name'];
// get details of the uploaded file 
$fileTmpPath = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
echo $fileName;
echo "<br>";
$fileNameCmps = explode(".", $fileName);
echo $fileNameCmps[0] . "." . $fileNameCmps[1];
echo "<br>";
$fileExtension = strtolower(end($fileNameCmps));
echo $fileExtension;
echo "<br>";

$info = new SplFileInfo($fileName );
$extension = $info->getExtension();
$newNameFile=$nombre . " " . $apellido . "." .  $extension;

// directory in which the uploaded file will be moved 
$uploadFileDir = '../img/perfiles/';
$path = '/img/perfiles/';
$dest_bd  = $path  . $newNameFile;
$dest_path = $uploadFileDir . $newNameFile;
echo $dest_path;
echo "<br>";
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  echo 'File is successfully uploaded.';
}
else
{
  echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}

$sql_select = "SELECT Dni FROM peluquero WHERE dNI = '$dni'";
$consulta_select = mysqli_query($conexion, $sql_select);
if (mysqli_num_rows($consulta_select) == 0) {
    $sql = "INSERT INTO peluquero (Dni, Nombre, Apellido, FechaNacimiento, Ruta) VALUES('$dni', '$nombre', '$apellido', '$fechaNacimiento','$dest_bd')";
    $consulta = mysqli_query($conexion, $sql);
    echo "<br>";
    echo mysqli_affected_rows($conexion);
    echo "<br>";
    if($consulta) {
        header("location:../registro_peluquero.php?msj=ok");
        //echo "<br>" . "exitoso";
    } else {
        header("location:../registro_peluquero.php?msj=error1");
        //echo "<br>";
        //echo "mallllllllllll";
    }    
}
else {
    header("location:../registro_peluquero.php?msj=error0");
}



 

?>