<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <header>

        <?php the_custom_logo(); ?>

        
        <input type="checkbox" id="chkBurger" />
        <div class="menuCache">
            <label for="chkBurger" class="exitMenu">
                <div class="exit1"></div>
                <div class="exit2"></div>
            </label>
            <div class="optionMenu">
               
                <?php wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                )); ?>
            </div>
        </div>
        <label for="chkBurger" class="menuBurger">
            <div class="burger1"></div>
            <div class="burger2">
                <div class="div1"></div>
                <div class="div2"></div>
            </div>
            <div class="burger3"></div>
        </label>
    </header>