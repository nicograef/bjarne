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
        <?php

        $post = get_post();
        $image_src = bjarne_get_featured_image_src($post_id, 'large');
        $content = $post->post_content;
        $title = $post->post_title;

        $link_to_front_page = get_site_url()
    ?>

        <section class="single">


            <img src="<?php echo $image_src ?>"
                alt="<?php echo $title ?>" />
            <article>
                <h1><?php echo $title ?>
                </h1>
                <?php
        echo $content;
        ?>
            </article>

        </section>

        <nav>
            <div id="close-button">
                <a href="<?php echo $link_to_front_page ?>">&#171;
                    zurück</a>
            </div>
        </nav>
    </div>


    <?php
wp_footer();
?>


</body>

</html>