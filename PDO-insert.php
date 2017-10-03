<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=Project-2-CMS', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("INSERT INTO `ProtoCMSdb` (`content_name`, `text_content`) VALUES (:content_name, :text_content);");
$query->bindParam(':content_name', $_POST['content_name']);
$query->bindParam(':text_content', $_POST['text_content']);
$query->execute();

?>