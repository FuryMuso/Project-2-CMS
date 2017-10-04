<?php

/**
 * select Home data from database
 *
 * @return array to be later inserted into webpage
 */
function retrieveHomeData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `section_title`,`text_input` FROM `Home`;");
    $query->execute();

    return $query->fetchAll();

}

//Todo put retrieveHomeData(); in the right place

?>