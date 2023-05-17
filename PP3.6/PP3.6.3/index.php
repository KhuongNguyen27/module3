<?php
include_once dirname(__FILE__).'/ArrayList/ArrayList.php';
use ArrayList\ArrayList;
$objArrayList = new ArrayList();
echo '<pre>';
try {
    $objArrayList->add(10);
    $objArrayList->add(11);
    $objArrayList->add(12);
    $objArrayList->add(13);
    $objArrayList->add(14);
    $objArrayList->add(15);
    $objArrayList->add(16);
    print_r($objArrayList);
    echo 'Index of 13 : '.$objArrayList->indexOf(13).'<br>';
    echo 'Insert item 18 in index 4<br>';
    $objArrayList->insert(4,18);
    print_r($objArrayList);
    echo 'Get item in index 5<br>';
    echo $objArrayList->get(5).'<br>';
    echo 'Sort ArrayList<br>';
    $objArrayList->sort();
    print_r($objArrayList);
    echo 'Add array<br>';
    $objsecondArrayList = [4,5,6,7];
    $objArrayList->addAll($objsecondArrayList);
    print_r($objArrayList);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '</pre>';
?>