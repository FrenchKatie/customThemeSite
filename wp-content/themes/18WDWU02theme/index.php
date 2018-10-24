<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- check for the posts -->
        <?php if(have_posts()): ?>
            <!-- get the current post we are on -->
            <?php while(have_posts()): the_post(); ?>
                <!-- append the posts title -->
                <h1><?php the_title(); ?></h1>
                <!-- append the post content -->
                <!-- needs to be in a div as the post content is not necessarily always going to be a p tag. -->
                <div><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php endif; ?>


        <h1>This is the custom theme</h1>
        <p>the content</p>
        <?php wp_footer(); ?>
    </body>
</html>