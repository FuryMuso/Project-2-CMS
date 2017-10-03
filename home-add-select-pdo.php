<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `section_title`,`text_input` FROM `Home`;");
$query->execute();

$result = $query->fetchAll();

var_dump($result);

echo "<br>";

//$var = $result[1]['content_name'];

?>