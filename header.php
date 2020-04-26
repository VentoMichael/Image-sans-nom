<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Portfolio de Vento Michael, jeune Webdesigner, lancé depuis 2019 je crée toutes identitées visuelles quel que sois les difficultés.">
    <meta name="keywords"
          content="Portfolio,description, webdesigner, freelance, HTML, CSS, JS, Javascript, PHP">
    <meta name="author"
          content="Michael Vento">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta name="fb:page_id"
          content="3158"/>
    <meta name="og:email"
          content="vento.michael0705@hotmail.com"/>
    <meta name="og:locality"
          content="JUPRELLE"/>
    <meta name="og:region"
          content="WALLONE"/>
    <meta name="og:postal-code"
          content="4450"/>
    <meta name="og:country-name"
          content="BELGIUM"/>
    <link rel="stylesheet"
          href="ressources/css/style.css"
          type="text/css">
    <title>
        <?php echo $title; ?> | &Iopf;&Mopf;&Sopf;
    </title>
</head>
<body>
<!--[if IE]>
<p class="browserupgrade" style="max-width: inherit">You are using a browser <strong> obsolete </strong>. Please <a
    href="https://browsehappy.com/"> upgrade
    your browser </a> to improve your experience and your safety.
</p>
<![endif]-->

<p class="no-js__message" style="max-width: inherit">
    To access all the functionality of this site, you must activate JavaScript.<a
        href="https://www.enable-javascript.com/fr/">
        Here are the instructions to enable JavaScript in your web browser</a>
</p>
<div>
    <header class="header">
        <div itemscope itemtype="https://schema.org/URL" class="logo"
             id="brand">
            <a itemprop="url"
               href="index.php"
               class="logo">
                    <?php include ("./ressources/svg/logo.svg") ?>
            </a>
            <h1 itemscope itemtype="https://schema.org/ImageObject" class="hidden">
                Vento website
            </h1>
        </div>
        <nav itemscope itemtype="http://schema.org/SiteNavigationElement" class="burger">
            <h2 class="hidden">
                Navigation
            </h2>
            <div class="menu-icon">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>
            <div class="nav div__navigation">
                <div class="nav__content div__navigation_list">
                    <a href="#" class="burger__button" id="burger-button">
                        <span class="burger__button__icon"></span>
                    </a>
                    <ul class="nav__list nav__content burger__menu"
                        id="menu">
                        <li class="nav__list-item">
                            <a itemprop="url"
                               href="index.php"
                               class="<?php echo $first_menu; ?>">
                                <span itemprop="name">Home</span>
                            </a>
                        </li>
                        <li class="nav__list-item">
                            <a itemprop="url"
                               href="project.php"
                               class="<?php echo $second_menu; ?>">
                                <span itemprop="name">Historic</span>
                            </a>
                        </li>
                        <li class="nav__list-item">
                            <a itemprop="url"
                               href="contact.php"
                               class="<?php echo $third_menu; ?>">
                                <span itemprop="name">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<body>
    <main>