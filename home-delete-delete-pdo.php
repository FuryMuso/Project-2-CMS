<?php

/**
 * function to delete content from Home table in database
 */
function deleteHomeContent()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("UPDATE `Home` SET `deleted` = 1 WHERE `section_title` = :section_title;");
    $query->bindParam(':section_title', $_POST['toDelete']);
    $query->execute();
}

deleteHomeContent();

header('Location: home-form.php');

?>