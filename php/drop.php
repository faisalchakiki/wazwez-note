<?php
require "connection.php";

$idtask = $_GET["idtask"];
$idsubtask = $_GET["idsubtask"];

if(isset($idtask) > 0){
   //  Query Drop
    $sqlDropTask = "DELETE FROM tasks WHERE id = $idtask";
    mysqli_query($conn, $sqlDropTask);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
       echo "<script> 
       document.location.href ='http://localhost/wazweznote/index.php';
    </script>";
    }
}

if(isset($idsubtask) > 0){
   //  Query Drop
    $sqlDropSub = "DELETE FROM subtasks WHERE id = $idsubtask";
    mysqli_query($conn, $sqlDropSub);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
       echo "<script> 
       document.location.href ='http://localhost/wazweznote/index.php';
    </script>";
    }
}
?>