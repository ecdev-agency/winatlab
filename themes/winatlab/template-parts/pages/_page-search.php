<?php 
/*
 * Page: Search
 */
defined( 'ABSPATH' ) || exit;

?>

<!-- Search -->
<section class="search_page">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <?php
                global $wp_query;
                //                    $archive_title = sprintf(
                //                        '%1$s %2$s',
                //                        '<span class="color-accent">' . __( 'Search:', 'winatlab' ) . '</span>',
                //                        '&ldquo;' . get_search_query() . '&rdquo;'
                //                    );

                ?>

                <!-- Header -->
                <div class="search_page__header">

                    <!-- Title -->
                    <h1 class="search_page__header-title">
                        <!--                        --><?php //echo wp_kses_post( $archive_title ); ?>
                        <?= _e( 'Résultats - <span>Recherche</span>', 'winatlab' ) ?>
                    </h1>
                    <!-- End Title -->

                    <!-- Text -->
<!--                    <p class="search_page__header-text">-->
<!--                        --><?//= _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 'winatlab' ) ?>
<!--                    </p>-->
                    <!-- End Text -->

                </div>
                <!-- End Header -->

                <!-- Content -->
                <div class="search_page__content">
                    <?php

                    if ( have_posts() ) :

                        echo '<ul class="search_page__list">';
                        while ( have_posts() ) :
                            the_post();

                            echo '<li>';
                            echo '<a href="' . get_the_permalink() . '" class="search_page__list-item">';

                            echo '<span>' . get_the_title() . '</span>';

                            echo '</a>';
                            echo '</li>';

                        endwhile;
                        echo '</ul>';

                    else:

                        echo '<div class="search_page__empty">' . __( 'Nothing Found', 'winatlab' ) . '</div>';

                    endif;
                    ?>
                </div>
                <!-- End Content -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->


</section>
<!-- End Search -->

