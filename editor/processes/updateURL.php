<?php
require_once("config.php");
if(isset($_GET["ref"])){
    $stmt = $db->prepare("UPDATE guests SET tinyurl=:tinyurl WHERE id=:id");
    $stmt->bindValue("id",$_GET["ref"]);
    $stmt->bindValue("tinyurl",$_POST["url"]);
    $stmt->execute();
    echo 1;
}else{
    echo 0;
}