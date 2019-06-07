<?php
/**
 * Template Name: Frontend Guy  Custome Page 
 * This template go  only show you the thing way  you entered in the page editor nake u no say he no go give header or footer of the theme  way you dey use 
 */
?>
<?php wp_footer(); ?>
</body>
</html>
<?php get_header(); ?>

<?php $layout = gridlove_get_page_layout(); ?>
<?php get_template_part('template-parts/ads/below-header'); ?>

<div id="content" class="gridlove-site-content container gridlove-sidebar-<?php echo esc_attr( $sidebar['position']); ?>">

	<div class="row">

    	<div class="gridlove-content gridlove-page-layout-<?php echo esc_attr( $layout['content'] ); ?>">

            <?php while( have_posts() ) : the_post(); ?>
                
               <article id="post-<?php the_ID(); ?>" <?php post_class('gridlove-box box-vm'); ?>>

                   <?php get_template_part('template-parts/page/content-'.$layout['content']); ?>

                </article>

            <?php endwhile; ?>

            <?php comments_template(); ?>

        </div>
        
        <?php get_sidebar(); ?>
    	
    </div>

</div>

<?php get_footer(); ?>
