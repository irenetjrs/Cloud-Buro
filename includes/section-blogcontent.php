<?php if(have_posts() ): while( have_posts() ): the_post();?>

   <p><?php echo get_the_date('d/m/y');?></p>
   <?php the_content();?>
   
<?php endwhile; else: endif;?>