<?php
    global $conn;
    global $records_per_page;
    $sql_count = "SELECT COUNT(*) as total FROM products";
    $stmt_count = $conn->query($sql_count);
    $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
    $row_count = $stmt_count->fetch();
    $total_records = $row_count['total'];
    $total_pages = ceil($total_records / $records_per_page);
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php for ($i=1; $i<=$total_pages; $i++) { ?>
        <li style='margin-left: 15px' class="page-item <?php if ($i==$current_page) echo 'active'; ?>">
            <a class="page-link" href="?controller=<?php echo $controller;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        </li>
        <?php } ?>
    </ul>
</nav>