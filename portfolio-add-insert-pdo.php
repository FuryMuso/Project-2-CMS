<?php

function addPortfolioContent()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("INSERT INTO `Portfolio` (`section_title`, `text_input`) VALUES (:section_title, :text_input);");
    $query->bindParam(':section_title', $_POST['section_title']);
    $query->bindParam(':text_input', $_POST['text_input']);
    $query->execute();
}

addPortfolioContent();

header('Location: portfolio-form.php');

?>