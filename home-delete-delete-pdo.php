<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("UPDATE `Home` SET `deleted` = 1 WHERE `id` = :id;");
$query->bindParam(':id', $_POST['id']);
$query->execute();

?>