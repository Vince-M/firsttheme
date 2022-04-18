<?php get_header(); ?>

<?php if(have_posts()) { ?>
  <?php while(have_posts()) { ?>
    <?php the_post(); ?>

    <div>
      <?php _themename_post_meta(); ?>
    </div>
    <div>
      <?php the_excerpt(); ?>
    </div>
    <?php _themename_readmore_link(); ?>
  <?php } ?>
  <?php the_posts_pagination() ?>
  <?php do_action('_themename_after_pagination'); ?>
<?php } else { ?>
  <p><?php esc_html(_e('Sorry, no posts matched your criteria.', '_themename')); ?></p>
<?php } ?>

<?php get_footer(); ?>