<?php
include_once dirname(__FILE__).'/LinkedList/LinkedList.php';
$objLinkedList = new LinkedList();
$objLinkedList->addFirst('Tam');
$objLinkedList->addLast('Khuong');
$objLinkedList->addLast('Hieu');
$objLinkedList->addLast('Phi');
$objLinkedList->addLast('Long');
echo '<pre>';
print_r($objLinkedList);
$objLinkedList->showList();
print_r($objLinkedList->ObjtoArray());
die();
?>