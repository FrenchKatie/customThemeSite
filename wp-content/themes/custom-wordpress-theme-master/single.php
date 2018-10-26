<?php get_header(); ?>
<h1>this is the file that renders out a single blog post</h1>

    <!-- check to see if the post/page actually has a post -->
    <?php if(have_posts()): ?>
        <!-- Loop over the posts/post and get the current one you are on -->
        <?php while(have_posts()): the_post();?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1><?= the_title(); ?></h1>
                        <p>This is a blog post</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1><?= the_content(); ?></h1>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>
