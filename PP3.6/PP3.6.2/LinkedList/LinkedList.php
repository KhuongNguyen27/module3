<?php
include_once dirname(__FILE__).'/../Elements/Elements.php';
class LinkedList{
    private $firstNode;
    private $lastNode;
    private $count=0;
    // thêm node đầu list
    function __construct(){}
    function addFirst($data){
        $node = new Node($data);

        // tham chiếu next của node đang thêm đến node đầu tiên nếu có 
        $node->next = $this->firstNode;

        // chuyển con trỏ firstNode đến node hiện tại
        $this->firstNode = $node;
        
        // nếu lastNode chưa khởi tạo, gán con trỏ lastNode vào node hiện tại 
        if(is_null($this->lastNode)){
            $this->lastNode = $node;
        }

        $this->count++;
    }
    function addLast($data){
        // Nếu đã có đối tượng đầu tiên 
        if (!is_null($this->firstNode)) {   
            $node = new Node($data);
            
            // tham chiếu next sau cùng đến đối tượng mới được thêm vào
            $this->lastNode->next = $node;
            
            // node cuối cùng nên next == null
            $node->next = null;

            // chuyển con trỏ lastNode đến đối tượng cuối cùng
            $this->lastNode = $node;
            $this->count++;
        }else {
            // Nếu chưa có đối tượng đầu tiên 
            $this->addFirst($data);
        }
    }
    function showList(){
        $current = $this->firstNode;
        while ($current != null) {
            echo $current->data.'<br>';
            $current = $current->next;
        }
    }
    public function ObjtoArray(): array
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
?>