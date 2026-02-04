<article>
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

    <?php if(has_post_thumbnail():) ?>
    <a href="<?php the_permalink(); ?>">  <?php the_posts_thumbnail((275,275));?>    </a>

        <?php endif; ?>

        <div class="meta-info">
            <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link()?></p>

            <?php if(has_catogory()):  ?>
                    categories: <span> <?php the_category(''); ?></span>
                <?php endif; ?>

                <?php if(has_tag()):  ?>
                    Tags: <span> <?php the_tags(''.''); ?></span>
                <?php endif; ?>

        
        </div>

<?php the_excerpt(); ?>

</article>

