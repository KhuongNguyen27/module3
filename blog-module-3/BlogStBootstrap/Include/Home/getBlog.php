<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-12">
                <?php foreach ($result['rows'] as $row) :?>
                <h1><?php echo $row['Title']?></h1>
                <blockquote class="blockquote"><?php echo $row['Teaser']?></blockquote>
                <div class="card" style="width: 60rem;">
                    <img src="<?php echo $row['Img_patch']?>" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 5rem; text-align: center;">
                        <p class="card-text" >Blog post in ...</p>
                    </div>
                </div>
                <p><img src="<?php // echo $row['Img_patch']?>"></p>
                <p><?php echo $row['Content']?></p>
                <p><?php echo $row['Content']?></p>
                <blockquote class="blockquote">
                    Post by Admin ON <?php echo $row['Create_date']?>
                </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>