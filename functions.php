<?php

function findSection($id, $data) {
    foreach ($data as $section) {
        if($section['id'] == $id) {
        return $section;
        }
    }
}

?>