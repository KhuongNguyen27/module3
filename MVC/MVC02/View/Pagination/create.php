<?php
$records_per_page = 5;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $records_per_page;
$sql = "SELECT * FROM home LIMIT $records_per_page OFFSET $offset";
$mysql = $conn->query($sql);
$mysql->setFetchMode( PDO :: FETCH_ASSOC);
$rows = $mysql->fetchAll();
?>