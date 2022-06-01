<?php
require_once("config.php");
if(isset($_GET["ref"])){
    $stmt = $db->prepare("DELETE FROM guests WHERE id=:id");
    $stmt->bindValue("id",$_GET["ref"]);
    $stmt->execute();
    header("location:../");
}else{
    echo "Are you lost?";
}

