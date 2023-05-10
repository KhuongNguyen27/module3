<?php
    class Stopwatch{
        private $start_time;
        private $end_time;
        private $execution_time;
        // public function __construct(){
        // }
        public function setStart_time(){         
            $this->start_time = microtime(true); 
        }
        public function setEnd_time(){
            $this->end_time = microtime(true);
        }
        public function getStart_time() : string{         
            return $this->start_time; 
        }
        public function getEnd_time() : string{
            return $this->end_time ;
        }
    }
    $watch = new Stopwatch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class='formWatch'>
        <b class = 'word'>Stop Watch</b>
        <form method='POST'>
            <button type="submit" class="btn btn-primary" name='start' value='1'>Start</button>
            <?php
                if (isset($_POST['start'])){
                    $watch->setStart_time();
                    $start = $watch->getStart_time();
                    $start = json_encode($start);
                    file_put_contents('data.json',$start);
                    echo "Time start 0";
                }
            ?>
        </form>
        <form method='POST'>
            <button type="submit" class="btn btn-primary" name='end' value='2'>End</button>
            <?php
                if (isset($_POST['end'])){
                    $watch->setEnd_time();
                    $end = $watch->getEnd_time();
                    $start = file_get_contents('data.json');
                    $start = json_decode($start);
                    echo "Time is : ".$end-$start.'s';
                }
            ?>
        </form>
    </div>
</body>

</html>