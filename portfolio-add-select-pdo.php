<?php

/**
 * retrieve data function to select data from database
 *
 * @return array which is inserted into designated webpage space
 */
function retrievePortfolioData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=CMSproject', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `section_title`,`text_input` FROM `Portfolio`;");
    $query->execute();

    return $query->fetchAll();
}

retrievePortfolioData();

?>