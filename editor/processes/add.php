<?php
require_once("config.php");
if(isset($_POST["name"]) && isset($_POST["alotted"])){
    $stmt = $db->prepare("INSERT INTO guests(name,alotted) VALUES(:name,:alotted)");
    $stmt->bindValue("name",$_POST["name"]);
    $stmt->bindValue("alotted",$_POST["alotted"]);
    $stmt->execute();

    $id = $db->lastInsertId();
    $stmt = $db->prepare("UPDATE guests SET url=:url WHERE id=:id");
    $stmt->bindValue("url",md5($id));
    $stmt->bindValue("id",$id);
    $stmt->execute();
    header("location:../");
}else{
    echo "Are you lost?";
}

