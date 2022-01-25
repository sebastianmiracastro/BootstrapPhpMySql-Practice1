<?php
session_start();
include_once('ConnectToDB.php');
if (isset($_GET['id'])) {
    $database = new ConectDB();
    $db = $database -> open();
    try{
        $sql = "DELETE FROM agenda_personal WHERE idPersona = '".$_GET['id']."' ";

        $_SESSION['message']= ($db->exec($sql)) ? 'Data Deleted Successfully.' : 'There Was An Error Deleting Data, Please Try Again.';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e -> getMessage();
    }
    $database->close();
}else{
    $_SESSION['message'] = 'Select A Valid User.';
}
header('location: index.php');

?>