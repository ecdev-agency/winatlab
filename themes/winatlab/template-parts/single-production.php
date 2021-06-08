<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package winatlab
 */

get_header();

$flexible = get_field( 'flexible', get_the_ID() );

if( $flexible ) :
    ?>
    <!-- Build -->
    <div class="build <?= get_field( 'flexible_class', get_the_ID() ) ?> padding-top-<?= get_field( 'flexible_padding_top', get_the_ID() ) ?>">

        <?php
        foreach ($flexible as $item) :
            get_template_part(
                'template-parts/flexible/_flexible',
                $item['acf_fc_layout'],
                [
                    'field' => $item
                ]
            );
        endforeach;
        ?>

    </div>
    <!-- Build -->
    <?php

else:

   ?>
    <!-- News -->
    <div class="news__single">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Title -->
                    <h1 class="news__single-title">
                        <?= _e( 'Article', 'winatlab' ) ?> <span><?= the_title() ?></span>
                    </h1>
                    <!-- End Title -->

                    <!-- Text -->
                    <div class="text__style">
                        <?= the_content() ?>
                    </div>
                    <!-- End Text -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </div>
    <!-- News -->
    <?php

endif;

get_footer();
