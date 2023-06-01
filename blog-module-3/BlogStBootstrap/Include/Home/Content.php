<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <hr class="divider" />
        <h1 class='text-center' style='padding:80px;font-size:40px;'>Small instructions</h1>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="fa-solid fa-blog fa-4x pb-4"></i></div>
                    <h3 class="h4 mb-2">Blog Post</h3>
                    <p class="text-muted mb-0">The blog is executed by the JuniorCode team, sharing experiences in the
                        process of writing code.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="fa-solid fa-location-question fa-4x pb-4"></i></div>
                    <h3 class="h4 mb-2">Q&A Blog</h3>
                    <p class="text-muted mb-0">Discussion and clarification of members' questions and concerns</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="fa-solid fa-users-gear fa-4x pb-4"></i></div>
                    <h3 class="h4 mb-2">About</h3>
                    <p class="text-muted mb-0">Administrative team</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="fa-regular fa-id-badge fa-4x pb-4"></i></div>
                    <h3 class="h4 mb-2">Contact</h3>
                    <p class="text-muted mb-0">Ask your question, let's discuss it together</p>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
</br>
<section class="page-section bg-light" id="portfolio">
    <div class="container ">
        <div class="text-center">
            <hr class="divider" />
            <h1 class='text-center' style='padding-top:80px;font-size:40px;'>Some things</h1>
            <h3 class="section-subheading text-muted fw-lighter" style='padding-bottom : 100px;'>
            a few small tips for an easy life</h3>
        </div>
        <div class="row" style='padding-bottom : 120px'>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link " data-bs-toggle="modal" href="index.php?controller=blog&action=getHome&table=blogphp">
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading" ><a href="index.php?controller=blog&action=getHome&blogcontroller=blogphp">PHP</a></div>
                        <div class="portfolio-caption-subheading text-muted">Person Home Page</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" >
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading"><a href="index.php?controller=blog&action=getHome&blogcontroller=blogjs">JAVASCRIPT</a></div>
                        <div class="portfolio-caption-subheading text-muted">JavaScript</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal">
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading"><a href="index.php?controller=blog&action=getHome&blogcontroller=blogsql">SQL</a></div>
                        <div class="portfolio-caption-subheading text-muted">Structured Query Language</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading">HTML</div>
                        <div class="portfolio-caption-subheading text-muted">Structured Query Language</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading">CSS</div>
                        <div class="portfolio-caption-subheading text-muted">Cascading Style Sheets</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <img class="img-fluid" style='border-radius:10px;' src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption  text-center">
                        <div class="portfolio-caption-heading">REGEX</div>
                        <div class="portfolio-caption-subheading text-muted">Structured Query Language</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider" />
<div class="col-md-10 col-lg-8 col-xl-12" >
    <!-- Post preview with image -->
    <?php foreach ($result['rows'] as $row) :?>
    <div class="row" style="padding:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-4">  
            <div class="image-container">
                <img class="img-fluid rounded float-start" style='border-radius:10px;' src="<?php echo $row['Img_patch'];?>" alt="Ảnh" />
            </div>
        </div>
        <div class="col-md-7">
            <div class="post-preview" >
                <a href="index.php?controller=home&action=getBlog&ID=<?php echo $row['ID']?>">
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
<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
        →</a></div>
</div>
</div>
</div>