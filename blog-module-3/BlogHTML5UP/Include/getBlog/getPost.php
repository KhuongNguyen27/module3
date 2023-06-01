<section>
    <header class="major">
        <h2>Bài viết</h2>
    </header>
    <div class="posts">
        <?php foreach ($result['rows'] as $row) :?>
        <article style = 'width:30%'>
            <a href="index.php?controller=local&action=getBlog&ID=<?php echo $row['ID']?>" class="image"><img src="<?php echo $row['Img_patch']?>"></a>
        </article>
        <article style = 'width:50%' >
            <h2><?php echo $row['Title']?></h2>
            <h4 style = 'font-weight:400;' ><?php echo $row['Create']?></h4>
            <ul class="actions">
                <li><a href= "index.php?controller=local&action=getBlog&ID=<?php echo $row['ID']?>" class="button">More</a></li>
            </ul>
        </article>
        <?php endforeach;?>
    </div>
</section>