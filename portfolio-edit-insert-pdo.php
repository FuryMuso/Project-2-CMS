<?php

/**
 * function created to place data into Home section of database
 */
function editPortfolioContent()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("UPDATE `Portfolio` SET `text_input` = :text_input WHERE `id` = :id;");
    $query->bindParam(':text_input', $_POST['text_input']);
    $query->bindParam(':id', $_POST['id']);
    $query->execute();
}

editHomeContent();

header ('Location: portfolio-form.php');

?>