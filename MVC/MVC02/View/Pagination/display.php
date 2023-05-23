<?php
    $sql_count = "SELECT COUNT(*) as total FROM home";
    $stmt_count = $conn->query($sql_count);
    $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
    $row_count = $stmt_count->fetch();
    $total_records = $row_count['total'];
    $total_pages = ceil($total_records / $records_per_page);
?>