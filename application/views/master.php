<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo base_url(); ?></title>
        <link href="<?php echo base_url(); ?>site/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>site/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/css/960.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/css/screen.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/css/color.css" media="screen" />


        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>site/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>site/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo base_url(); ?>site/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>site/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>site/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>site/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>site/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>


        <?php
        if ($header != NULL) {
            include 'header.php';
        }
        if ($slider != NULL) {
            echo $slider;
        }
        ?>

        <section>
            <div class="container">
                <div class="row">

                    <?php
                    if ($sidebar != NULL) {
                        echo $sidebar;
                    }
                    ?> 
                    <div class = "col-sm-9 padding-right">
                        <?php
                        echo $featured;
                        echo $tab_product;
                        echo $maincontent;
                        echo $cart_view;
                        echo $product_detail;
                        echo $category_product_view;
                        
                        ?>
                    </div> 
                </div>
            </div>
        </section>


        <?php
        if ($footer != '') {
            include 'footer.php';
        }
        ?>



        <script src="<?php echo base_url(); ?>site/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>site/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>site/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url(); ?>site/js/price-range.js"></script>
        <script src="<?php echo base_url(); ?>site/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>site/js/main.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>site/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>site/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>site/js/shoppica.js"></script>
    </body>
</html>