<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span>Welcome to AL MASHAAN STEEL CO.</span>
                        <ul class="header-top-menu">
                            <li><a href=""><i class="fa-regular fa-envelope"></i> info@almashaansteel.com</a></li>
                            <li><a href=""><i class="fa-solid fa-phone"></i> +965 24751120/30</a></li>
                        </ul>
                        <div class="header-top-right">
                            <div class="header-top-lang"> 
                                <?php echo do_shortcode('[gtranslate]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area">
        <div class="container-fluid">
            <div class="col-12">
                <nav class="navbar navbar-expand-md">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                            ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </header>