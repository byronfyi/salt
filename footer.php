    </main>

    <footer class="footer">
        <div class="container">
            <div class="row footer__row">
                <div class="footer__col footer__address">
                    <?php if( get_field('footer_address') ): ?>
                        <div class="footer__block">
                            <h4>Address</h4>
                            
                            <address>
                                <?php the_field('footer_address'); ?>
                            </address>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="footer__col footer__opening">
                    <?php if( get_field('footer_opening_hours') ): ?>
                        <div class="footer__block">
                            <h4>Opening Hours</h4>

                            <?php the_field('footer_opening_hours'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('footer_food_service') ): ?>
                        <div class="footer__block">
                            <h4>Food Service</h4>

                            <?php the_field('footer_food_service'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="footer__col footer__contact">
                    <div class="footer__block">
                        <h4>Contact</h4>
                        <?php if( get_field('contact_phone') ): ?>
                            <?php $phone = str_replace(' ', '', get_field('contact_phone')); ?>
                            <p><a href="tel:<?php echo $phone; ?>"><?php the_field('contact_phone'); ?></a></p>
                        <?php endif; ?>

                        <?php if( get_field('contact_email') ): ?>
                            <p><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="footer__col footer__mail">
                    <div class="footer__block">
                        <form class="form">
                            <label for="email">Mailing List</label>

                            <div class="form-group">
                                <input type="text" id="email">
                                <button>Join</button>
                            </div>
                        </form>

                        <p>Sign up to receive information on upcoming 
                        events at SALT</p>

                        <?php if(
                            get_field('facebook') ||
                            get_field('instagram') ||
                            get_field('untappd') ||
                            get_field('twitter')
                        ): ?>
                            <ul class="footer__social list-unstyled">
                                <?php if( get_field('facebook') ): ?>
                                    <li><a href="<?php the_field('facebook'); ?>" target="_blank"><span class="sr-only">Facebook</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.47 54.98"><path d="M32.19 27.71c-.16-.21-.13-.35-.13-.47v-4.67c0-.46.05-.91.15-1.35.41-1.77 1.74-2.89 3.61-3 1.17-.06 2.34-.03 3.51-.05.23 0 .47.06.73-.07v-6.69c-.55-.23-1.16-.23-1.75-.3-1.61-.19-3.23-.34-4.86-.29-1.44.04-2.85.27-4.18.82-2.89 1.19-4.64 3.37-5.43 6.36-.28 1.05-.41 2.12-.41 3.21v6.48h-7.02v8.01h6.99c.06 2.19.02 4.32.03 6.45V55C11.89 53.52.06 42.94 0 27.77-.06 12.8 11.8.66 26.49.03c15.52-.67 28.16 11.28 28.94 26.1.83 15.85-11.12 27.23-23.33 28.86V35.77c.71-.11 1.42-.04 2.13-.05.69-.01 1.39 0 2.08 0h2.21c.41-2.67.82-5.3 1.23-8h-7.57Z"/></svg></a></li>
                                <?php endif; ?>

                                <?php if( get_field('instagram') ): ?>
                                    <li><a href="<?php the_field('instagram'); ?>" target="_blank"><span class="sr-only">Instagram</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 55.47 55.47"><defs><style>.cls-1{fill:#307978}</style></defs><g id="Layer_2-2" data-name="Layer 2"><circle cx="27.74" cy="27.74" r="27.74"/><g id="w5pAGs"><path d="M44.84 19.4v16.67c-.09.34-.1.7-.16 1.04a9.492 9.492 0 0 1-1.28 3.26 9.478 9.478 0 0 1-8.09 4.43H20.19c-.86 0-1.71-.1-2.54-.33-1.13-.3-2.16-.8-3.11-1.48a9.366 9.366 0 0 1-2.7-3.04c-.54-.97-.9-2-1.07-3.1-.04-.26-.03-.53-.12-.78V19.4c.02-.04.04-.08.04-.12.04-.57.15-1.12.3-1.67.3-1.09.78-2.1 1.44-3.01.8-1.1 1.79-2 2.97-2.68 1-.57 2.07-.95 3.22-1.13.26-.04.53-.03.78-.12h16.7s.08.04.12.05c.57.04 1.12.14 1.67.29 1.09.3 2.1.78 3.02 1.44 1.11.8 2 1.78 2.68 2.97.57 1 .96 2.07 1.13 3.21.04.26.03.53.12.78Zm-17.1 22.38h7.38c.43 0 .87-.02 1.3-.09 1.91-.32 3.37-1.31 4.42-2.93.7-1.09.98-2.3.98-3.58V20.32c0-.58-.04-1.15-.18-1.72-.51-1.96-1.68-3.4-3.51-4.29-.94-.46-1.94-.62-2.98-.62H20.36c-.43 0-.87.02-1.3.1-1.87.32-3.31 1.29-4.35 2.86-.73 1.1-1.02 2.33-1.02 3.63v14.9c0 .5.03 1 .13 1.49.37 1.67 1.25 3 2.65 3.98.79.55 1.66.9 2.61 1.04.43.07.86.09 1.3.09h7.38Z" class="cls-1"/><path d="M18.92 27.69c.07-4.93 4.03-8.78 8.87-8.74 4.95.04 8.79 4.03 8.75 8.85a8.76 8.76 0 0 1-8.84 8.72c-4.93-.03-8.77-3.99-8.77-8.84Zm8.82 5.81c3.19 0 5.77-2.58 5.77-5.76 0-3.19-2.59-5.76-5.77-5.76-3.19 0-5.77 2.58-5.77 5.76 0 3.19 2.59 5.76 5.77 5.76ZM36.92 16.38c1.18 0 2.23.9 2.22 2.22-.01 1.37-1.1 2.2-2.21 2.2-1.15 0-2.23-.87-2.22-2.22 0-1.3 1.04-2.2 2.21-2.2Z" class="cls-1"/></g></g></svg></a></li>
                                <?php endif; ?>

                                <?php if( get_field('untappd') ): ?>
                                    <li><a href="<?php the_field('untappd'); ?>" target="_blank"><span class="sr-only">untappd</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2" viewBox="0 0 55.47 55.47"><g data-name="Layer 1"><circle cx="27.74" cy="27.74" r="27.74"/><path d="M9.04 37.64c1.24-1.96 2.65-3.79 3.99-5.67 1.78-2.5 3.58-4.99 5.35-7.49.54-.76 1.21-1.36 2.05-1.77.35-.17.68-.37 1.03-.54.74-.35 1.34-.86 1.88-1.47 1.94-2.2 3.97-4.32 6.05-6.38.48-.48.79-1.11 1.34-1.52.11-.09.1-.35.14-.52 1.13-.11 2.25.65 2.74 1.84-.53.42-.87 1-1.17 1.58-1.52 2.97-3.04 5.95-4.69 8.86-.37.65-.5 1.35-.57 2.06-.14 1.51-.71 2.79-1.6 4.01-2.79 3.81-5.53 7.67-8.26 11.53-.65.92-1.49 1.42-2.96 1.04-2.52-.64-4.3-2.16-5.32-4.56v-1Zm37.39 1c-1.04 2.38-2.79 3.92-5.33 4.55-1.33.33-2.2.01-2.95-1.05-2.88-4.07-5.78-8.11-8.69-12.15-.84-1.16-1.16-2.42-1.01-3.83.04-.37.13-.7.31-1.02.87-1.6 1.74-3.21 2.6-4.81.04-.07.1-.13.16-.21.36.19.56.49.78.76.41.5.91.87 1.49 1.17 2.64 1.39 2.4 1.16 4.21 3.71 2.49 3.49 4.99 6.97 7.49 10.46.33.47.63.95.95 1.43v1ZM24.24 17.97c-.84-1.35-1.26-2.83-2.42-3.91.55-1.09 1.43-1.72 2.69-1.91.48 1.27 1.56 2 2.39 3.02-.89.93-1.74 1.82-2.66 2.79Z" data-name="2fKdGj" fill="#307978"/></g></svg></a></li>
                                <?php endif; ?>

                                <?php if( get_field('twitter') ): ?>
                                    <li><a href="<?php the_field('twitter'); ?>" target="_blank"><span class="sr-only">Twitter</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.47 55.47"><g><circle cx="27.74" cy="27.74" r="27.74"/><path d="M20.98 35.66c-3.49-.16-5.83-2.49-6.58-4.9 1.01.14 2 .16 3-.1-.04-.12-.14-.1-.22-.13-2.46-.73-4.12-2.29-4.95-4.73-.19-.57-.28-1.16-.32-1.76 0-.13-.03-.26.03-.42.95.47 1.93.81 3.1.83-2.01-1.53-3.07-3.47-3.07-5.94 0-1.23.32-2.38.95-3.47 3.84 4.51 8.67 6.97 14.55 7.39-.51-3.54.65-6.22 3.79-7.96 3.11-1.39 5.86-.81 8.36 1.48 1.53-.3 2.99-.86 4.44-1.69-.25.85-.66 1.54-1.15 2.19a7.07 7.07 0 0 1-1.78 1.62c.52.1 1.71-.21 3.79-.95-.1.33-.78 1.19-1.51 1.95-.58.6-1.22 1.14-1.89 1.65v.62c.03 2.89-.55 5.66-1.69 8.31-1.11 2.58-2.65 4.87-4.7 6.81-2.56 2.43-5.57 4.02-9.01 4.8-1.9.43-3.83.59-5.78.49-3.45-.18-6.64-1.19-9.58-3.01-.04-.02-.07-.06-.16-.13 1.89.17 3.7.06 5.47-.45 1.78-.5 3.4-1.32 4.93-2.49Z" fill="#307978"/></g></svg></a></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- The Modal -->
    <div id="modal" class="modal">
      <button id="modal-close" class="modal-close">
          <span>&times;</span>
      </button>
      <img id="modal-content" class="modal-content">
      <div id="modal-caption" class="modal-caption"></div>
    </div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/dist/app.js"></script>
</body>
</html>