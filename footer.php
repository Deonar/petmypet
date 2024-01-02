<footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer-logo">
                <?php if (get_theme_mod('custom_logo')) : ?>
                    <img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-white.svg" alt="<?php echo get_bloginfo('name'); ?>">
                <?php endif; ?>
                <p>
                    PetMyPet is a pet care app that helps pet owners take better care of their companions.
                </p>
            </div>

            <div class="footer-btn">
                <button type="button" class="btn btn-blue scrollto" href="#subscribe">
                    Join waitlist
                </button>
            </div>

            <ul class="footer-social social-list">
            <?php if (get_field('tik_tok', 'option')) : ?>
                <li class="social-item">
                    <a href="<?php the_field('tik_tok', 'option'); ?>" class="social-link" target="_blank">
                        <svg fill="#000000" viewBox="0 0 512 512" width="18.396" height="18.396" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (get_field('facebook', 'option')) : ?>
                <li class="social-item">
                    <a href="<?php the_field('facebook', 'option'); ?>" class="social-link" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7.522" height="16.115" viewBox="0 0 7.522 16.115">
                            <path class="a" d="M228.115,145.97V137.9h2.662l.421-2.674h-3.083v-1.341c0-.7.229-1.363,1.23-1.363h2v-2.669h-2.841c-2.389,0-3.041,1.573-3.041,3.754v1.618h-1.639V137.9h1.639v8.068Z" transform="translate(-223.825 -129.856)" />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (get_field('instagram', 'option')) : ?>
                <li class="social-item">
                    <a href="<?php the_field('instagram', 'option'); ?>" class="social-link" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.396" height="18.396" viewBox="0 0 18.396 18.396">
                            <path class="a" d="M13.319,0H5.077A5.082,5.082,0,0,0,0,5.077v8.243A5.082,5.082,0,0,0,5.077,18.4h8.243A5.082,5.082,0,0,0,18.4,13.319V5.077A5.082,5.082,0,0,0,13.319,0Zm3.445,13.319a3.448,3.448,0,0,1-3.445,3.444H5.077a3.448,3.448,0,0,1-3.444-3.444V5.077A3.448,3.448,0,0,1,5.077,1.632h8.243a3.448,3.448,0,0,1,3.445,3.444v8.243Z" />
                            <path class="a" d="M45.708,40.97a4.74,4.74,0,1,0,4.74,4.74A4.746,4.746,0,0,0,45.708,40.97Zm0,7.848a3.108,3.108,0,1,1,3.108-3.108A3.111,3.111,0,0,1,45.708,48.818Z" transform="translate(-36.51 -36.512)" />
                            <path class="a" d="M120.118,28.251a1.2,1.2,0,1,0,.847.35A1.2,1.2,0,0,0,120.118,28.251Z" transform="translate(-105.981 -25.177)" />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>