<?php
include_once dirname(__FILE__).'/Container/Container.php';
use Container\LinkedList;
$objLinkedList = new LinkedList();
$objLinkedList->add('Tam');
$objLinkedList->add('Khuong');
$objLinkedList->add('Hieu');
$objLinkedList->add('Phi');
$objLinkedList->add('Long');
    echo '<pre>';
    
    // echo 'Get List :<br>';
    // echo $objLinkedList->printList();
    
    // echo '<br>Get Variable by Index 3 :<br>';
    // print_r($objLinkedList->get(8));
    
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
    
    // echo "<br><br>Clone obj :<br>";
    // echo "<br>obj primitive:<br>";
    // $objLinkedList_2 = $objLinkedList->clone();
    // $objLinkedList->printList();
    // echo "<br>obj clone:<br>";
    // $objLinkedList_2->printList();
    // echo "<br>obj primitive add new value:<br>";
    // $objLinkedList->add('Hung');
    // $objLinkedList->printList();
    // echo "<br>obj clone:<br>";
    // $objLinkedList_2->printList();
    $objLinkedList->remove(8);    
    $objLinkedList->printList();

    echo '</pre>';
?>