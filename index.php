<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_head();
    ?>
</head>

<body>
    <div id="svg-wrapper">

        <div id="front-page">

            <header>
                <?php
        echo bjarne_get_about_content();
    ?>
            </header>
            <section id="portfolio">

                <?php

        $posts = get_posts(
            array('numberposts' => -1)
        );
        foreach ($posts as $post) :

            $post_id = $post->post_id;
            $image_src = bjarne_get_featured_image_src($post_id, 'medium_large');
            $title = $post->post_title;
            $link_to_post = get_permalink($post_id)
        ?>



                <div class="portfolio-item">
                    <a href="<?php echo $link_to_post ?>">
                        <img src="<?php echo $image_src ?>"
                            alt="<?php echo $title ?>" />
                    </a>
                </div>

                <?php
        endforeach;

        ?>
            </section>
            <footer>

                <?php
        wp_footer();
    ?>
                <p id="copyright">theme by <a href="https://nicograef.com" _target="blank"
                        _rel="noopener noreferer">nico
                        gräf</a></p>
            </footer>

        </div>
    </div>


</body>

</html>