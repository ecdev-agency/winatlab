<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winatlab
 */

get_header();

?>
<!-- News -->
<div class="news__page">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Sidebar -->
                <div class="news__page-sidebar">

                    <!-- Sidebar > Left -->
                    <div class="news__page-sidebar--left">

                        <?php
                        $args = [
                            'post_type'         => 'news',
                            'orderby'           => 'meta_value',
                            'order'             => 'DESC',
                            'posts_per_page'    => 1,
                        ];

                        $loop = new WP_Query($args);
                        if( $loop->have_posts() ) : ?>

                            <!-- List -->
                            <ul class="news__list row">

                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <li class="first_post">
                                        <a href="<?= the_permalink() ?>" class="news__list-item">

                                            <!-- Item > Image -->
                                            <div class="news__list-item--image">
                                                <?= kama_thumb_img( 'w=840 &h=530' ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="news__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

                                            <?php
                                            $cat = get_the_category();
                                            if( $cat ) :
                                                ?>
                                                <!-- Item > Cat -->
                                                <p class="news__list-item--category">
                                                    <em><?= $cat[0]->name ?></em> - <?= __( 'Temps de lecture' ) ?> <?= winatlab_estimated_reading_time(get_the_ID()) ?>
                                                </p>
                                                <!-- End Item > Cat -->
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endwhile; wp_reset_postdata(); ?>

                            </ul>
                            <!-- End List -->

                        <?php endif; ?>

                    </div>
                    <!-- End Sidebar > Left -->

                    <!-- Sidebar > Right -->
                    <div class="news__page-sidebar--right">

                        <!-- Attached -->
                        <div class="news__page-attached">

                            <?php
                            $args = [
                                'post_type'         => 'news',
                                'orderby'           => 'meta_value',
                                'order'             => 'DESC',
                                'meta_query'        => [
                                    'meta_value'    => [
                                        'key'       => 'news_popular',
                                        'value'     => 'yes'
                                    ]
                                ]
                            ];

                            $loop = new WP_Query($args);
                            if( $loop->have_posts() ) : ?>

                                <!-- Title -->
                                <h5 class="news__page-attached--title">
                                    <?= _e( 'Articles populaires', 'winatlab' ) ?>
                                </h5>
                                <!-- End Title -->

                                <!-- List -->
                                <ul class="news__page-attached--list">

                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                        <li>
                                            <a href="<?= the_permalink() ?>" class="news__page-attached--list---item">
                                                <!-- Item > Title -->
                                                <span>
                                            <?= the_title() ?>
                                        </span>
                                                <!-- End Item > Title -->
                                                <?php
                                                $cat = get_the_category();
                                                if( $cat ) :
                                                    ?>
                                                    <!-- Item > Cat -->
                                                    <p>
                                                        <em><?= $cat[0]->name ?></em> - <?= __( 'Temps de lecture' ) ?> <?= winatlab_estimated_reading_time(get_the_ID()) ?>
                                                    </p>
                                                    <!-- End Item > Cat -->
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endwhile; wp_reset_postdata(); ?>

                                </ul>
                                <!-- End List -->

                            <?php endif; ?>

                            <?php
                            $args = [
                                'post_type'         => 'news',
                                'orderby'           => 'meta_value',
                                'order'             => 'DESC',
                                'meta_query'        => [
                                    'meta_value'    => [
                                        'key'       => 'news_favorite',
                                        'value'     => 'yes'
                                    ]
                                ]
                            ];

                            $loop = new WP_Query($args);
                            if( $loop->have_posts() ) : ?>

                                <!-- Title -->
                                <h5 class="news__page-attached--title">
                                    <?= _e( 'Articles à la une', 'winatlab' ) ?>
                                </h5>
                                <!-- End Title -->

                                <!-- List -->
                                <ul class="news__page-attached--list">

                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                        <li>
                                            <a href="<?= the_permalink() ?>" class="news__page-attached--list---item">
                                                <!-- Item > Title -->
                                                <span>
                                            <?= the_title() ?>
                                        </span>
                                                <!-- End Item > Title -->
                                                <?php
                                                $cat = get_the_category();
                                                if( $cat ) :
                                                    ?>
                                                    <!-- Item > Cat -->
                                                    <p>
                                                        <em><?= $cat[0]->name ?></em> - <?= __( 'Temps de lecture' ) ?> <?= winatlab_estimated_reading_time(get_the_ID()) ?>
                                                    </p>
                                                    <!-- End Item > Cat -->
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endwhile; wp_reset_postdata(); ?>

                                </ul>
                                <!-- End List -->

                            <?php endif; ?>

                        </div>
                        <!-- End Attached -->

                    </div>
                    <!-- End Sidebar > Right -->

                </div>
                <!-- End Sidebar -->

                <!-- Sidebar -->
                <div class="news__page-sidebar">

                    <!-- Sidebar > Left -->
                    <div class="news__page-sidebar--left">

                        <?php
                        $args = [
                            'post_type'         => 'news',
                            'orderby'           => 'meta_value',
                            'order'             => 'DESC',
                            'posts_per_page'    => 4,
                            'offset'            => 1,
                        ];

                        $loop = new WP_Query($args);
                        if( $loop->have_posts() ) : ?>

                            <!-- List -->
                            <ul class="news__list row">

                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <li>
                                        <a href="<?= the_permalink() ?>" class="news__list-item">

                                            <!-- Item > Image -->
                                            <div class="news__list-item--image">
                                                <?= kama_thumb_img( 'w=840 &h=530' ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="news__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

                                            <?php
                                            $cat = get_the_category();
                                            if( $cat ) :
                                                ?>
                                                <!-- Item > Cat -->
                                                <p class="news__list-item--category">
                                                    <em><?= $cat[0]->name ?></em> - <?= __( 'Temps de lecture' ) ?> <?= winatlab_estimated_reading_time(get_the_ID()) ?>
                                                </p>
                                                <!-- End Item > Cat -->
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endwhile; wp_reset_postdata(); ?>

                            </ul>
                            <!-- End List -->

                        <?php endif; ?>

                    </div>
                    <!-- End Sidebar > Left -->

                    <!-- Sidebar > Right -->
                    <div class="news__page-sidebar--right">

                        <!-- Subscribe -->
                        <div class="news__page-subscribe">

                            <!-- content -->
                            <div class="news__page-subscribe--content">

                                <?php echo do_shortcode( '[contact-form-7 id="241" title="Inscrivez-vous à Notre newsletter" html_class="news__page-subscribe--form"]' ); ?>

                            </div>
                            <!-- end content -->

                        </div>
                        <!-- End Subscribe -->

                    </div>
                    <!-- End Sidebar > Right -->

                </div>
                <!-- End Sidebar -->

                <!-- Sidebar -->
                <div class="news__page-sidebar reverse">

                    <!-- Sidebar > Left -->
                    <div class="news__page-sidebar--left">

                        <?php
                        $args = [
                            'post_type'         => 'news',
                            'orderby'           => 'meta_value',
                            'order'             => 'DESC',
                            'offset'            => 5,
                        ];

                        $loop = new WP_Query($args);

                        if( $loop->have_posts() ) : ?>

                            <!-- List -->
                            <ul class="news__list row">

                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <li class="first_post">
                                        <a href="<?= the_permalink() ?>" class="news__list-item">

                                            <!-- Item > Image -->
                                            <div class="news__list-item--image">
                                                <?= kama_thumb_img( 'w=840 &h=530' ) ?>
                                            </div>
                                            <!-- End Item > Image -->

                                            <!-- Item > Title -->
                                            <span class="news__list-item--title">
                                                <?= get_the_title() ?>
                                            </span>
                                            <!-- End Item > Title -->

                                            <?php
                                            $cat = get_the_category();
                                            if( $cat ) :
                                                ?>
                                                <!-- Item > Cat -->
                                                <p class="news__list-item--category">
                                                    <em><?= $cat[0]->name ?></em> - <?= __( 'Temps de lecture' ) ?> <?= winatlab_estimated_reading_time(get_the_ID()) ?>
                                                </p>
                                                <!-- End Item > Cat -->
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endwhile; wp_reset_postdata(); ?>

                            </ul>
                            <!-- End List -->

                        <?php endif; ?>

                    </div>
                    <!-- End Sidebar > Left -->

                    <!-- Sidebar > Right -->
                    <div class="news__page-sidebar--right">

                        <?php
                        if( get_field( 'enable', 'news_settings' ) ) :
                        ?>
                        <!-- Banner -->
                        <div class="news__page-banner">

                            <!-- Title -->
                            <h2 class="news__page-banner--title">
                                <?= get_field( 'title', 'news_settings' ) ?>
                            </h2>
                            <!-- End Title -->

                            <!-- Button -->
                            <a href="<?= get_field( 'button_file', 'news_settings' ) ?>" class="btn" target="_blank">
                                <?= get_field( 'button_title', 'news_settings' ) ?>
                            </a>
                            <!-- End Button -->

                            <img
                                    src="<?= get_field( 'image', 'news_settings' ) ?>"
                                    alt="<?= get_bloginfo('name') ?>"
                                    title="<?= get_bloginfo('name') ?>"
                            >

                        </div>
                        <!-- End Banner -->

                        <?php endif; ?>

                    </div>
                    <!-- End Sidebar > Right -->

                </div>
                <!-- End Sidebar -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</div>
<!-- News -->
<?php
get_footer();
