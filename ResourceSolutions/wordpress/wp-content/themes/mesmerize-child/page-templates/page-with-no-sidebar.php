<?php
/*
Template Name: Page With No Sidebar
*/

mesmerize_get_header();
?>
    <div class="page-content">
        <div class="gridContainer">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
