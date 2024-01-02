<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


    <header class="header" id="header">
        <div class="container">
            <div class="header-wrap">

                <a href="#subscribe" class="header-logo scrollto">
                    <?php if (get_theme_mod('custom_logo')) : ?>
                        <img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-white.svg" alt="<?php echo get_bloginfo('name'); ?>">
                    <?php endif; ?>
                </a>

                <div class="header-menu" id="header-menu">
                    <?php if ( is_page_template( 'front-page.php' ) ) :
                        front_menu_nav();
                    else :
                        primary_menu_nav();
                    endif; ?>
                    <button class="btn btn-light header-btn scrollto" href="#subscribe">
                        <?php echo __('Join waitlist', 'petmypet'); ?>
                    </button>
                    <ul class="header-social social-list">
                        <li class="social-item">
                            <a href="<?php the_field('facebook', 'option'); ?>" class="social-link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7.522" height="16.115" viewBox="0 0 7.522 16.115">
                                    <path class="a" d="M228.115,145.97V137.9h2.662l.421-2.674h-3.083v-1.341c0-.7.229-1.363,1.23-1.363h2v-2.669h-2.841c-2.389,0-3.041,1.573-3.041,3.754v1.618h-1.639V137.9h1.639v8.068Z" transform="translate(-223.825 -129.856)" />
                                </svg>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="<?php the_field('instagram', 'option'); ?>" class="social-link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.396" height="18.396" viewBox="0 0 18.396 18.396">
                                    <path class="a" d="M13.319,0H5.077A5.082,5.082,0,0,0,0,5.077v8.243A5.082,5.082,0,0,0,5.077,18.4h8.243A5.082,5.082,0,0,0,18.4,13.319V5.077A5.082,5.082,0,0,0,13.319,0Zm3.445,13.319a3.448,3.448,0,0,1-3.445,3.444H5.077a3.448,3.448,0,0,1-3.444-3.444V5.077A3.448,3.448,0,0,1,5.077,1.632h8.243a3.448,3.448,0,0,1,3.445,3.444v8.243Z" />
                                    <path class="a" d="M45.708,40.97a4.74,4.74,0,1,0,4.74,4.74A4.746,4.746,0,0,0,45.708,40.97Zm0,7.848a3.108,3.108,0,1,1,3.108-3.108A3.111,3.111,0,0,1,45.708,48.818Z" transform="translate(-36.51 -36.512)" />
                                    <path class="a" d="M120.118,28.251a1.2,1.2,0,1,0,.847.35A1.2,1.2,0,0,0,120.118,28.251Z" transform="translate(-105.981 -25.177)" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header-burger" id="header-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>