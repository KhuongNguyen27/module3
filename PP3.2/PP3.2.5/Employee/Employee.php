<?php
namespace Employee;
class Employee {
    public string $ID;
    public string $first_name;
    public string $last_name;
    public string $date_of_start;
    public string $address;
    public string $position;
    public function __construct($ID, $first_name, $last_name, $date_of_start, $address, $position){
            $this->ID = $ID;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->date_of_start = $date_of_start;
            $this->address = $address;
            $this->position = $position;
    }
    public function getID(){
        return $this->ID;
    }
    public function getFirst_name(){
        return $this->first_name;
    }
    public function getLast_name(){
        return $this->last_name;
    }
    public function getDate_of_start(){
        return $this->date_of_start;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getPosition(){
        return $this->position;
    }
    public function __destruct(){}
    // public static function Create(): Employee{
    //     global $employee;
    //     foreach ($employee as $employ) {
    //         $this->__construct($employ['ID'], $employ['First_name'], $employ['Last_name'], $employ['Date_of_start'], $employ['Address'], $employ['Position']);
    //     }
    // }
}
?>