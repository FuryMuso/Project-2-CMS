<?php

/**
 * select data from database
 *
 * @return array
 */
function retrieveData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `section_title`,`text_input` FROM `Home`;");
    $query->execute();

    return $query->fetchAll();


}

?>