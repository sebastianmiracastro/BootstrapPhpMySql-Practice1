<?php
session_start();
include_once('ConnectToDB.php');
if (isset($_POST['EditProfile'])) {
    $database = new ConectDB();
    $db = $database -> open();
    try{
        $id = $_GET['id'];
        $nombrec = $_POST['ContactName'];
        $telefonoc = $_POST['PhoneNumber'];
        $emailc = $_POST['Mail'];
        $direccionc = $_POST['direct'];

        $sql = "UPDATE agenda_personal SET Nombre = '$nombrec', Telefono = '$telefonoc', Correo = '$emailc', Direccion = '$direccionc' WHERE idPersona = '$id' ";

        $_SESSION['message']= ($db->exec($sql)) ? 'Data Changed Successfully.' : 'There Was An Error Trying To Change The Data, Please Try Again.';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e -> getMessage();
    }
    $database->close();
}else{
    $_SESSION['message'] = 'Fill In All The Fields.';
}
header('location: index.php');

?>