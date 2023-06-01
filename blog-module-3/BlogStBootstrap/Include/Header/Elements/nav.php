<nav class="navbar navbar-fixed-bottom navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php?controller=home&action=getHome">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style='margin-right:20px'>
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="index.php?controller=blog&action=getHome">BLog Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="index.php?controller=contact&action=getHome">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="index.php?controller=about&action=getHome">About</a></li>
            </ul>
        </div>
        <?php 
        $controller = isset($_GET['controller'])?$_GET['controller']:'home';
        $table = isset($_GET['table'])?$_GET['table']:null;
        echo $table;
        ?>
        <!-- <form action="index.php?controller=<?php // echo $controller;?>&action=getSearch" method="post">
            <div class="input-group rounded">
                <input type="text" style="font-family:arial;" style="border-radius:5px;height:25px;" placeholder="Text.."
                    name="search_query" />
                <input type="submit" style="border-radius:5px;height:25px;background-color:#848884; font-size:16px;" value="Search">
            </div>
        </form> -->
        <form class="form-inline mr-auto navbar-search" action='index.php?controller=<?php echo $controller?>&action=getSearch&table=<?php echo $table?>' method='post'>
            <div class="input-group">
                <input type="text" name="search_query" style="border-radius:5px;height:25px;margin-top:3px" class="form-control bg-light border-0" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button style="border-radius:5px;height:30px;" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
<?php foreach ($banner['rows'] as $rows):?>
<header class="masthead" style="background-image: url('<?php echo $rows['Img_patch']?>')">
    <?php include_once 'Include/Header/Elements/Slogan.php' ?>
</header>
<?php  endforeach;?>