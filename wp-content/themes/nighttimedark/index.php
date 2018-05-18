<?php get_header(); ?>
        <div class="header__nav">
            <nav class="nav">
                <ul class="nav__ul">
                    <li class="nav__li"><a href="" class="nav__a nav__a--select u-link-no-style">Home</a></li>
                    <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </header>
    <main>
        <section class="section-latest">
            <h2 class="heading--secondary">Latest</h2>
            <div class="latest">
                <div class="latest__post">
                    <h3 class="heading--tertiary">Latest Post</h3>

                    <div class="row">
                        <div class="col-1-of-2">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/user/Sombrero Galaxy 5-7-18.jpg" alt="Sombrero Galaxy 5-7-18.jpg" id="fk3a4vvz988hiucri5vy2e" class="latest__post--img" title="Sombrero Galaxy - Click to enlarge">
                        </div>

                        <div class="col-1-of-2">
                            <div class="latest__post--details">
                                <h4 class="heading--fourth">May 7, 2018</h4>
                                <p class="latest__post--caption">The Sombrero Galaxy, also known as M104, is a spiral galaxy about 30% of the size of the Milky Way. In spite of this, it is one of the most massive objects in the Virgo Galaxy Cluster. The galaxy was discovered in 1781 by Pierre Méchain and later...<a href="#" class="latest__post--link">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <div class="latest__article">
                    <h3 class="heading--tertiary">Latest Article</h3>

                    <div class="row">
                        <div class="col-1-of-2">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/system/Orion Nebula, Running Man Nebula 3-9-18.jpg" alt="Sombrero Galaxy 5-7-18.jpg" class="latest__article--img" title="Sombrero Galaxy">
                        </div>

                        <div class="col-1-of-2">
                            <h4 class="heading--fourth">Processing Deep Sky Images (Part 1)</h4>
                            <p class="latest__article--caption">New to astrophotography? Looking to improve your image processing skills? In this 3 part tutorial, we will explore some of the techniques used by professional photographers to developed their photos. We will look at the many programs at our disposal, the workflows that are commonly used, how to process a typical image, and advanced processing techniques for unusual situations.</p>
                            <a href="#" class="latest__article--link">Read</a>
                        </div>
                                
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    
    
    $args = array(
        'numberposts' => 1,
        'offset' => 0,
        'category' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' =>'',
        'post_type' => 'post',
        'post_status' => 'draft, publish, future, pending, private',
        'suppress_filters' => true
    );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
    print_r($recent_posts);
?>
    

<?php get_footer(); ?>