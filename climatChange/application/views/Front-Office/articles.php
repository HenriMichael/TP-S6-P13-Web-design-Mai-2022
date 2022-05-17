<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Articles</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/Front-Office/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/Front-Office/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="<?php echo base_url('assets/Front-Office/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/Front-Office/style.css'); ?>" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="<?php echo base_url('assets/Front-Office/css/responsive.css'); ?>" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="<?php echo base_url('assets/Front-Office/css/colors.css'); ?>" rel="stylesheet">

    <!-- Version Garden CSS for this template -->
    <link href="<?php echo base_url('assets/Front-Office/css/version/garden.css'); ?>" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                       
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="garden-index.html"><img src="<?php echo base_url('assets/images/im.jpg'); ?>" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu" aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="<?php echo base_url('rechauffement-climatique/Home') ?>">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="<?php echo base_url('rechauffement-climatique/contact') ?>">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="<?php echo base_url('rechauffement-climatique/administrator-Login') ?>">Administrateur</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        
 
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="page-wrapper">
                            <div class="row">
                            <img src="<?php echo base_url('assets/images/images-'.$item->idcontent.'.jpeg'); ?>" alt="" class="img-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h1><?php echo $item->title; ?></h1>   
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h5><?php echo $item->description; ?></h5>           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <p><?php echo $item->content; ?></p>      
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h6><?php echo $item->auteur; ?></h6>
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h6><?php echo $item->datepublication; ?></h6>
           
        </div>
    </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

       <footer class="footer" style="height-top: 50px;">
            <p style="text-align: center;">RAVELONJARA Henri Michael - ETU001196 - IT UNIVERSITY</p>
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="<?php echo base_url('assets/Front-Office/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Front-Office/js/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Front-Office/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Front-Office/js/custom.js'); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
   <!-- MAP & CONTACT -->
    <script src="<?php echo base_url('assets/Front-Office/js/garden-map.js'); ?>"></script>

</body>
</html>