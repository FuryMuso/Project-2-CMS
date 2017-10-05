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

    $query = $db->prepare("SELECT `id`, `section_title`,`text_input` FROM `Home` WHERE `deleted` = 0 ;");
    $query->execute();

    return $query->fetchAll();

}

function findHomeSection($id, $data) {
    foreach ($data as $section) {
        if($section['id'] == $id) {
            return $section;
        }
    }
}

?>