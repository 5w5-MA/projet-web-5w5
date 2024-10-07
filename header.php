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
</head>

<body>
    <header>
        <h1>TIM</h1>
        <input type="checkbox" id="chkBurger" />
        <div class="menuCache">
            <label for="chkBurger" class="exitMenu">
                <div class="exit1"></div>
                <div class="exit2"></div>
            </label>
            <div class="optionMenu">
                <h2>à propos</h2>
                <h2>cours</h2>
                <h2>professeur</h2>
                <h2>nous contacter</h2>
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