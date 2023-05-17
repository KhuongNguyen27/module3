<?php
include_once dirname(__FILE__).'/ArrayList/ArrayList.php';
use ArrayList\ArrayList;
try {
    $listInteger = new ArrayList();
    $listInteger->add(1);
    $listInteger->add(2);
    $listInteger->add(3);
    echo $listInteger->get(1);
    echo $listInteger->get(-1);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>