<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleUp</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Unbounded:wght@200..900&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Unbounded:wght@200..900&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} ?>
<section class="section main">
    <?php echo do_shortcode('[main_section]'); ?>
</section>

<section class="section business">
    <?php echo do_shortcode('[business_section]'); ?>>
</section>

<section class="section solution">
    <?php echo do_shortcode('[solution_section]'); ?>
</section>


<?php wp_footer(); ?>

<!--
<script src="scripts/main_script.js"></script>
-->
</body>
</html>