<footer class="footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-footer mb-5 mb-md-0">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                        <p><?php echo esc_html('Since 2006, Al Mashaan Steel Co. has been a pioneering force in Kuwait’s metal fabrication industry, delivering a diverse range of solutions crafted to elevate the safety, functionality, and aesthetics of both residential and industrial environments. ', 'almashaansteel');?></p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/almashaansteelco" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/almashaansteelstore/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="single-footer mb-5 mb-md-0">
                        <h4><?php echo esc_html('QUICK LINKS', 'almashaansteel');?></h4>
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                            ));
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-footer">
                        <h4><?php echo esc_html('CONTACT US', 'almashaansteel');?></h4>  
                        <span><?php echo esc_html('Email: info@almashaansteel.com', 'almashaansteel');?></span>
                        <span><?php echo esc_html('Phone: +965 24751120/30', 'almashaansteel');?></span>
                        <span>
                            <?php 
                            echo wp_kses( 
                                __( 'Address: Al Mashaan Steel Co. Building 49, <br/> street 101, block 9, South Subhan <br/> Industrial Area, Kuwait', 'almashaansteel' ), 
                                array( 'br' => array() ) 
                            ); 
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copy">
                        <p><?php echo wp_kses('Copyright &copy; 2025 by AL MASHAAN STEEL CO. Design & Developed by <a href="https://infinityflamesoft.com/" target="_blank">Infinity Flame Soft.</a>', ['a' => ['href' => [], 'target' => []]]); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
    <button id="scrollToTop" class="scroll-top">
        <i class="fa fa-arrow-up"></i>
    </button>
</body>
</html>