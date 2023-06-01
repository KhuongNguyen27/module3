<div class="col-md-10 col-lg-8 col-xl-12">
    <!-- Post preview with image -->
    <?php foreach ($result['rows'] as $row) :?>
    <div class="row">
        <div class="col-md-4">
            <div class="image-container" style='position:relative; height: 250px;padding:5px'>
                <img class="rounded float-start" style='position:absolute;width:100%;'
                    src="<?php echo $row['Img_patch']; ?>" alt="Ảnh" />
            </div>
        </div>
        <div class="col-md-8" style='position:relative;'>
            <div class="post-preview" style="position:absolute; height: 100px; margin-top:10px">
                <?php 
                $table = isset($_REQUEST['blogcontroller'])?$_REQUEST['blogcontroller']:'blogphp';
                ?>
                <a href="index.php?controller=blog&action=getBlog&ID=<?php echo $row['ID']?>&table=<?php echo $table?>">
                    <h4 class="post-subtitle"><b><?php echo $row['Title']?></b></h4>
                </a>
                <p class="post-meta">
                    Posted by <a href="#!">Admin</a> on <?php echo $row['Create_date']?>
                </p>
            </div>

        </div>
    </div>
    <?php endforeach; ?>
</div>
<hr class="my-4" />
<div class="col-md-10 col-lg-8 col-xl-12">
    <form class = 'row' action = 'index.php?controller=blog&action=getHome' method='post'>
        <div class="col-auto">
            <select name = 'blogcontroller' class="form-select">
                <option selected>Open this select menu</option>
                <option value="blogphp">PHP</option>
                <option value="blogjs">JavaScript</option>
                <option value="blogsql">SQL</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="submit" style='width:120px;height:40px;' value='View'>
        </div>
    </form>
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
        →</a>
    </div>
</div>
</div>
</div>
</div>