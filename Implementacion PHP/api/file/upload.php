<>

<?php
// incluir configuracion del sitio
include_once '../config/inc_config.php';

// incluir las funciones de cifrado y descifrado
include_once './crypto.php';

$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$tmp_filename = $_FILES["fileToUpload"]["tmp_name"];
$uploadOk = 1;

// Insertar link para volver
echo "<a href='http://$WEBSERVER/cifrado.html'>Volver</a><br>";

// Cifrar
encrypt($tmp_filename, "password");

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo 'Ocurrio un problema al cifrar su archivo.<br>';
// if everything is ok, try to upload file
} else {
	echo '<pre>';

	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido cifrado y almacenado en nuestros servidores.<br>";
    } else {
        echo "Lo siento, ha ocurrido un error al cifrar tu archivo.<br>";
    }
	echo "Más información de depuración:<br>";
	print_r($_FILES);

	print '</pre>';
}
?>