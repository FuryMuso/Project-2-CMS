<?php

/**
 *function created to insert data into database
 *
 * @param
 * @param
 *
 * return data is sent to and displayed in the database
 */
function addHomeContent()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("INSERT INTO `Home` (`section_title`, `text_input`) VALUES (:section_title, :text_input);");
    $query->bindParam(':section_title', $_POST['section_title']);
    $query->bindParam(':text_input', $_POST['text_input']);
    $query->execute();
}

addHomeContent();

header('Location: home-form.php');
?>