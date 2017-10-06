<?php

function findSection($id, Array $data) {
    foreach ($data as $section) {
        if($section['id'] == $id) {
        return $section;
        }
    }
}

?>