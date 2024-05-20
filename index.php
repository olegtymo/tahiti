<?php get_header()?>
<div class="container-lg">
        <section class="hero">
            <div class="hero__text"><h2 class="hero__title "><span>Welcome</span> to&#160;tahiti</h2>
                <p class="hero__subtitle ">Your vacation starts here</p></div>
            <div class="slider-wrapper">
                <div class="hero-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-1.webp 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-1@2x.webp 2x" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-1.jpg 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-1@2x.jpg 2x" type="image/jpeg">
                        <img class="hero-slide__img" src="<?php echo get_template_directory_uri()?>/img/hero/hero-1.jpg" alt="Hero" loading="lazy"/></picture>
                </div>
                <div class="hero-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-2.webp 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-2@2x.webp 2x" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-2.jpg 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-2@2x.jpg 2x" type="image/jpeg">
                        <img class="hero-slide__img" src="<?php echo get_template_directory_uri()?>/img/hero/hero-2.jpg" alt="Hero" loading="lazy"/></picture>
                </div>
                <div class="hero-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-3.webp 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-3@2x.webp 2x" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-3.jpg 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-3@2x.jpg 2x" type="image/jpeg">
                        <img class="hero-slide__img" src="<?php echo get_template_directory_uri()?>/img/hero/hero-3.jpg" alt="Hero" loading="lazy"/></picture>
                </div>
                <div class="hero-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-4.webp 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-4@2x.webp 2x" type="image/webp">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/hero/hero-4.jpg 1x, <?php echo get_template_directory_uri()?>/img/hero/hero-4@2x.jpg 2x" type="image/jpeg">
                        <img class="hero-slide__img" src="<?php echo get_template_directory_uri()?>/img/hero/hero-4.jpg" alt="Hero" loading="lazy"/></picture>
                </div>
            </div>
        </section>
        <section id="discover" class="discover">
            <div class="container">
                <div class="row">
                    <div class="col-12 discover__text"><h2 class="discover__title "><span>DISCOVER</span> tahiti</h2>
                        <p class="discover__subtitle"> Just pick your destination. Our travel experts will take care of&#160;the
                            rest.</p></div>
                </div>
                <div class="cards-slider-wrapper">
                    <div class="card">
                        <div class="card__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.webp 1x, <?php echo get_template_directory_uri()?>/img/cards/bora-bora@2x.webp 2x"
                                        type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.jpg 1x, <?php echo get_template_directory_uri()?>/img/cards/bora-bora@2x.jpg 2x"
                                        type="image/jpeg">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.jpg" alt="Bora Bora"/></picture>
                        </div>
                        <div class="card__title-wrapper"><h3 class="card__title">Bora Bora</h3>
                            <p class="card__desc"> Surrounded by&#160;sand-fringed motus and a&#160;turquoise lagoon
                                protected by&#160;a&#160;coral reef, Bora Bora is&#160;known&#8230;</p></div>
                        <a href="#" class="card__price"><p>FROM <span>$2,500</span></p></a></div>
                    <div class="card">
                        <div class="card__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/moorea.webp 1x, <?php echo get_template_directory_uri()?>/img/cards/moorea@2x.webp 2x"
                                        type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/moorea.jpg 1x, <?php echo get_template_directory_uri()?>/img/cards/moorea@2x.jpg 2x"
                                        type="image/jpeg">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/img/cards/moorea.jpg" alt="Moorea"/></picture>
                        </div>
                        <div class="card__title-wrapper"><h3 class="card__title">Moorea</h3>
                            <p class="card__desc"> Mo&#8217;orea is&#160;a&#160;South Pacific island, part of&#160;French
                                Polynesia&#8217;s Society Islands archipelago. It&#8217;s known for&#8230;</p></div>
                        <a href="#" class="card__price"><p>FROM <span>$2,500</span></p></a></div>
                    <div class="card">
                        <div class="card__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/raiatea.webp 1x, <?php echo get_template_directory_uri()?>/img/cards/raiatea@2x.webp 2x"
                                        type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/raiatea.jpg 1x, <?php echo get_template_directory_uri()?>/img/cards/raiatea@2x.jpg 2x"
                                        type="image/jpeg">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/img/cards/raiatea.jpg" alt="Raiatea"/></picture>
                        </div>
                        <div class="card__title-wrapper"><h3 class="card__title">Raiatea</h3>
                            <p class="card__desc"> Ra&#8217;iātea, is&#160;the second largest of&#160;the Society
                                Islands in&#160;French Polynesia. The island is&#160;widely regarded as&#8230;</p></div>
                        <a href="#" class="card__price"><p>FROM <span>$2,500</span></p></a></div>
                    <div class="card">
                        <div class="card__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/tahaa.webp 1x, <?php echo get_template_directory_uri()?>/img/cards/tahaa@2x.webp 2x"
                                        type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/tahaa.jpg 1x, <?php echo get_template_directory_uri()?>/img/cards/tahaa@2x.jpg 2x"
                                        type="image/jpeg">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/img/cards/tahaa.jpg" alt="Tahaa"/></picture>
                        </div>
                        <div class="card__title-wrapper"><h3 class="card__title">Tahaa</h3>
                            <p class="card__desc"> Taha&#8217;a is&#160;an&#160;island located among the western group,
                                the Leeward Islands, of&#160;the Society Islands in&#8230;</p></div>
                        <a href="#" class="card__price"><p>FROM <span>$2,500</span></p></a></div>
                    <div class="card">
                        <div class="card__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.webp 1x, <?php echo get_template_directory_uri()?>/img/cards/bora-bora@2x.webp 2x"
                                        type="image/webp">
                                <source srcset="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.jpg 1x, <?php echo get_template_directory_uri()?>/img/cards/bora-bora@2x.jpg 2x"
                                        type="image/jpeg">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/img/cards/bora-bora.jpg" alt="Bora Bora"/></picture>
                        </div>
                        <div class="card__title-wrapper"><h3 class="card__title">Bora Bora</h3>
                            <p class="card__desc"> Surrounded by&#160;sand-fringed motus and a&#160;turquoise lagoon
                                protected by&#160;a&#160;coral reef, Bora Bora is&#160;known&#8230;</p></div>
                        <a href="#" class="card__price"><p>FROM <span>$2,500</span></p></a></div>
                </div>
                <form action="#" class="select-island-form row"><h3>Discover all Tahiti has to&#160;offer.</h3>
                    <div class="select-wrapper col"><select class="form-select" id="island-select"
                                                            aria-label="Island select">
                            <option selected>Select an&#160;island</option>
                            <option value="Taha’a">Taha&#8217;a</option>
                            <option value="Ra'iātea">Ra&#8217;iātea</option>
                            <option value="Moorea">Moorea</option>
                            <option value="Bora Bora">Bora Bora</option>
                        </select>
                        <button type="submit" class="explore-btn">Explore</button>
                    </div>
                </form>
            </div>
        </section>
        <section id="experience" class="experience">
            <div class="container">
                <div class="experience__inner row">
                    <div class="experience__upper-wrapper col-12"><h2 class="experience__title"><span>Experience</span>
                            tahiti</h2>
                        <p class="experience__subtitle">Immerse yourself in&#160;Tahiti&#8217;s unique culture</p></div>
                    <div class="experience__lower-wrapper col-12"><p class="experience__description"> The beauty, drama,
                            and power of&#160;today&#8217;s Tahitian dance testify to&#160;its resilience in&#160;Polynesian
                            culture. In&#160;ancient times, dances were directly linked with all aspects of&#160;life. One
                            would dance for joy, to&#160;welcome a&#160;visitor, to&#160;pray to&#160;a&#160;god, to&#160;challenge
                            an&#160;enemy, and to&#160;seduce a&#160;mate.</p> <a href="#" class="experience__btn btn">Learn
                            more</a></div>
                </div>
            </div>
        </section>
        <section id="why" class="why-tahiti">
            <div class="container"><h2 class="why-tahiti__title"><span>Why</span> tahiti?</h2>
                <div class="why-tahiti__reasons-wrapper row">
                    <div class="why-tahiti__reason col-md-4 col-12 mb-4 mb-md-0"><p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Aenean molestie sollicitudin nibh, nec iaculis est luctus sit
                            amet.</p></div>
                    <div class="why-tahiti__reason col-md-4 col-12 mb-4 mb-md-0"><p>Phasellus vehicula nibh vel arcu
                            tempor, sed porttitor metus viverra. Praesent pharetra scelerisque eros, sed sollicitudin arcu
                            pretium.</p></div>
                    <div class="why-tahiti__reason col-md-4 col-12 "><p>Maecenas ac&#160;facilisis dolor. Curabitur vel
                            nulla eget nunc finibus pulvinar. Ut&#160;nec ornare nisi. Duis scelerisque volutpat risus vel
                            condimentum.</p></div>
                </div>
            </div>
        </section>
        <section id="book" class="book">
            <div class="container">
                <div class="row">
                    <div class="col-12 book__inner"><h3 class="book__title">Unique vacations, tailored to&#160;your
                            desires</h3>
                        <p class="book__description">Our travel experts will take care of&#160;everything. Whether
                            choosing from our packaged vacations or&#160;customizing your own, extraordinary service and
                            exceptional value are just a call or&#160;click away.</p>
                        <button class="book__btn btn">book now</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer()?>
