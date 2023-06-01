<?php
namespace Controller;
include_once 'Model/Contact.php';
use Model\Contact;
class ContactController{
    function getHome(){
        $this->getBanner();
        include_once 'Include/Contact/contact.php';
    }
    function getBanner(){
        $banner = Contact::getBanner();
        include_once 'Include/Header/Elements/nav.php';
    }
}
?>