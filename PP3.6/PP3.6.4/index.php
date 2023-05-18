<?php
include_once dirname(__FILE__).'/Container/Container.php';
use Container\LinkedList;
$objLinkedList = new LinkedList();
$objLinkedList->add('Tam');
$objLinkedList->add('Khuong');
$objLinkedList->add('Hieu');
$objLinkedList->add('Phi');
$objLinkedList->add('Long');
try {
    echo '<pre>';
    
    // echo 'Get List :<br>';
    // echo $objLinkedList->printList();
    
    // echo '<br>Get Variable by Index 3 :<br>';
    // print_r($objLinkedList->get(3));
    
    // echo '<br>Size of LinkedList<br>';
    // echo $objLinkedList->size();

    // echo "<br><br>Contains of variable 'Hieu': <br>";
    // var_dump($objLinkedList->contains('Hieu'));

    // echo "<br><br>Contains of variable 'Thao': <br>";
    // var_dump($objLinkedList->contains('Thao'));

    // echo "<br><br>Index of variable 'Khuong': <br>";
    // echo $objLinkedList->indexOf('Khuong');

    // echo "<br><br>Index of variable 'Tham': <br>";
    // echo $objLinkedList->indexOf('Tham');
    
    // $objLinkedList_2 = new LinkedList();
    $objLinkedList_2 = $objLinkedList->clone();
    $objLinkedList->add('Hung');
    echo $objLinkedList->printList();
    print_r($objLinkedList_2);

    echo '</pre>';
} catch (Exception $e) {
    $e->getMessage();
}
?>