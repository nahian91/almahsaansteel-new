<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header-top">
        <div class="container">
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
                                <select>
                                    <option>English</option>
                                    <option>Arabic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-3">
                    <div class="logo">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-9">
                    <div class="mainemenu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>