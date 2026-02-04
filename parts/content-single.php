<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
    <header>
        <h1> <?php the_title(); ?> </h1>
        <div class="meta-info">
            <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link()?></p>

            <?php if(has_catogory()):  ?>
                    categories: <span> <?php the_category(''); ?></span>
                <?php endif; ?>

                <?php if(has_tag()):  ?>
                    Tags: <span> <?php the_tags(''.''); ?></span>
                <?php endif; ?>
        </div>
</header>

<div class="content">
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
</div>



</article>