<?php get_header();?>
<?php the_title(); ?>
<img src="<?php the_post_thumbnail_url('post_image'); ?>">

<?php if(have_posts()) : while(have_posts()) : the_post();?>
<?php the_content();?>

<?php endwhile; else: endif;?>
<?php get_footer();?>