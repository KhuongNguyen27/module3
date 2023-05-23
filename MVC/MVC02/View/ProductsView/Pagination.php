<?php
$total_pages = $result['total_pages'];
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php for ($i=1; $i<=$total_pages; $i++) { ?>
        <li style='margin-left: 15px' class="page-item <?php if ($i==$current_page) echo 'active'; ?>">
            <a class="page-link" href="?controller=products&page=<?php echo $i;?>&search=<?php echo $search;?>"><?php echo $i; ?></a>
        </li>
        <?php } ?>
    </ul>
</nav>