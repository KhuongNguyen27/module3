<section id="banner">
    <div class="content">
        <?php foreach ($result['rows'] as $row):?>
        <header>
            <h1><?php echo $row['Title']?></h1>
        </header>
        <p><?php echo $row['Teaser']?></p>
        <p><?php echo $row['Create']?></p>
        <ul class="actions">
            <li><a href="index.php?controller=local&action=getBlog&ID=0" class="button big">Read More</a></li>
        </ul>
        <?php endforeach;?>
    </div>
    <span class="image object">
        <img src="<?php echo $row['Img_patch']?>" alt="" />
    </span>
</section>