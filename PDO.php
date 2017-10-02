<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=ProtoCMSdb', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `content_name`,`text_content` FROM `ProtoCMSdb`;");
$query->execute();

$result = $query->fetchAll();

?>