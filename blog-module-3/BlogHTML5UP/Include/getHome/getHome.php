<!-- <section>
    <header class="major">
        <h2>Erat lacinia</h2>
    </header>
    <div class="features">
        <article>
            <span class="icon fa-gem"></span>
            <div class="content">
                <h3>Portitor ullamcorper</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                    interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-pen-nib"></span>
            <div class="content">
                <h3>Sapien veroeros</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                    interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-rocket"></span>
            <div class="content">
                <h3>Quam lorem ipsum</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                    interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-signal"></span>
            <div class="content">
                <h3>Sed magna finibus</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                    interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
    </div>
</section> -->
<section>
    <header class="major">
        <h2>Bài viết</h2>
    </header>
    <div class="posts">
        <?php foreach ($result['rows'] as $row) :?>
        <article>
            <a href="index.php?controller=local&action=getBlog&ID=<?php echo $row['ID']?>" class="image"><img src="<?php echo $row['Img_patch']?>"/></a>
            <h3><?php echo $row['Title']?></h3>
            <p><?php echo $row['Teaser']?></p>
            <ul class="actions">
                <li><a href= "index.php?controller=local&action=getBlog&ID=<?php echo $row['ID']?>" class="button">More</a></li>
            </ul>
            <p><?php echo $row['Create']?></p>
        </article>
        <?php endforeach;?>
    </div>
</section>