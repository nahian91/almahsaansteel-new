<?php
get_header(); // Includes the header.php template file
?>

<?php
    // Start the Loop to fetch the page content
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <?php the_content(); // Display page content ?>
            <?php
        endwhile;
    endif;
    ?>

<?php
get_footer(); // Includes the footer.php template file
?>
