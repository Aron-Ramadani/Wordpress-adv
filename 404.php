<?php get_header(); ?>

<div class="content" class="site-content">
 <div id="primary" class="content-area">
<main id="main" class="container">
    <div class="container">
        <div class="error-404">
            <header>
                <h1>page not found!</h1>
                <p>bdsiubsidbviubsdiuvbsiudbgv</p>
            </header>

            <div class="error">
                <p>how about doing a search?</p> 
                <?php get_search_form(); ?>
                <?php
                 the_widget(
                    "WP_Wighet_Recent_Posts",
                    array(
                        'title' => 'latest posts',
                        'number' => 3
                    )
                    );
                ?>      
            </div>
        </div>
    </div>
</main>
</div>

</div>

<?php get_footer(); ?>