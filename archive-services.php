<?php
/* Template Name: Archive Page Custom */

get_header();
if(have_posts()) : while(have_posts()) : the_post();
    echo '<div class="entry-content">';
    echo '<h2 class="title">';
    the_title();
    echo '</h2>';
    the_content();
    echo '</div>';
endwhile; endif;
get_footer();
