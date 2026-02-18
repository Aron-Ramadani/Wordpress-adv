<?php get_header(); ?>

    <div id="primary">
        <div id="main">
            <div class="container">
                <h1>search result for: <?php echo get_search_query();  ?></h1>
                <?php

                    get_search_form();

                    while(have_posts()):
                        the_post();
                        get_template_part('parts/contant','search');
                        endwhile ;
                        the_posts_

                ?>
            </div>
        </div>

    

    </div>