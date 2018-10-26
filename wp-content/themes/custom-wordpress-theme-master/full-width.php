<?php
    /* Template Name: Full Page Width */

 ?>

 <?php get_header(); ?>
 <h1>this is using the full width template file</h1>

     <!-- check to see if the post/page actually has a post -->
     <?php if(have_posts()): ?>
         <!-- Loop over the posts/post and get the current one you are on -->
         <?php while(have_posts()): the_post();?>
             <div class="container-fluid">
                 <div class="row">
                     <div class="col">
                         <h1><?= the_title(); ?></h1>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <p><?= the_content(); ?></p>
                     </div>
                 </div>
             </div>

         <?php endwhile; ?>
     <?php endif; ?>


 <?php get_footer(); ?>
