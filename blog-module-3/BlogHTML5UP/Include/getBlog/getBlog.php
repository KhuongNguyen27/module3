<section>
    <header class="major">
        <h2>Bài viết</h2>
    </header>
    <div class="posts" >
        <?php foreach ($result['rows'] as $row) :?>
        <article style = 'width:100%;'>
            <a href="#" class="image"><img src="<?php echo $row['Img_patch']?>"></a>
            <h2><?php echo $row['Title']?></h2>
            <h3 style = 'font-weight:400;' ><?php echo $row['Teaser']?></h3>
            <h3 style = 'font-weight:400;' ><?php echo $row['Content']?></h3>
            <h3 style = 'font-weight:400;' ><?php echo $row['Create']?></h3>
        </article>
        <?php endforeach;?>
    </div>
</section>