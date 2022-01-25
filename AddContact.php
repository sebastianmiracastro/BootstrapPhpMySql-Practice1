<?php
session_start();
include_once('ConnectToDB.php');
if (isset($_POST['AddC'])) {
    $database = new ConectDB();
    $db = $database -> open();
    try{
        $stmt = $db -> prepare("INSERT INTO agenda_personal (Nombre, Telefono, Correo, Direccion)
        VALUES (:ContactName, :PhoneNumber, :Mail, :direct)");
        $_SESSION['message']=($stmt -> execute(array(':ContactName' => $_POST['ContactName'],
        ':PhoneNumber' => $_POST['PhoneNumber'],
        ':Mail' => $_POST['Mail'],
        ':direct' => $_POST['direct']))) ? 'Contact Added Successfully.' : 'An Error Occurred While Uploading The Data.';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e -> getMessage();
    }
    $database->close();
}else{
    $_SESSION['message'] = 'Fill In All The Fields.';
}
header('location: index.php');

?>