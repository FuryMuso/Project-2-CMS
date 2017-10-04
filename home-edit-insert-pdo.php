<?php

/**
 * function created to place data into About section of database
 */
function editHomeContent()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("INSERT INTO `About` (`section_title`, `text_input`) VALUES (:section_title, :text_input);");
    $query->bindParam(':section_title', $_POST['toEdit']);
    $query->bindParam(':text_input', $_POST['toEdit']);
    $query->execute();
}

editHomeContent();

header ('Location: home-form.php');

?>