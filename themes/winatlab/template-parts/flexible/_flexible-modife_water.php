<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Section -->
<section class="flexible_modife_water margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12 col-sm-12 col-md-6">

                <!-- Left -->
                <div class="flexible_modife_water__left">

                    <?php if( ! empty($field['left_title']) ) : ?>
                        <h4 class="flexible_modife_water__left__title">
                            <?= $field['left_title'] ?>
                        </h4>
                    <?php endif; ?>

                    <?php if( ! empty($field['left_subtitle']) ) : ?>
                        <div class="flexible_modife_water__left__subtitle">
                            <?= $field['left_subtitle'] ?>
                        </div>
                    <?php endif; ?>

                    <!-- container -->
                    <div class="flexible_modife_water__left__container">

                        <!-- List -->
                        <ul class="flexible_modife_water__left__list">
                            <li>
                                <!-- Box -->
                                <div class="box">
                                    <div class="box__image">
                                        <img src="<?= get_template_directory_uri() . '/assets/images/modife_water_left_arrow_1.svg' ?>" alt="<?= _e( 'Polarité', 'winatlab' ) ?>" title="<?= _e( 'Polarité', 'winatlab' ) ?>">
                                    </div>
                                    <span>
                                    <?= _e( 'Polarité', 'winatlab' ) ?>
                                </span>
                                </div>
                                <!-- End Box -->
                            </li>
                            <li>
                                <!-- Box -->
                                <div class="box">
                                    <div class="box__image">
                                        <img src="<?= get_template_directory_uri() . '/assets/images/modife_water_left_arrow_1.svg' ?>" alt="<?= _e( 'Viscosité', 'winatlab' ) ?>" title="<?= _e( 'Viscosité', 'winatlab' ) ?>">
                                    </div>
                                    <span>
                                    <?= _e( 'Viscosité', 'winatlab' ) ?>
                                </span>
                                </div>
                                <!-- End Box -->
                            </li>
                            <li>
                                <!-- Box -->
                                <div class="box">
                                    <div class="box__image">
                                        <img src="<?= get_template_directory_uri() . '/assets/images/modife_water_left_arrow_2.svg' ?>" alt="<?= _e( 'Diffusivité', 'winatlab' ) ?>" title="<?= _e( 'Diffusivité', 'winatlab' ) ?>">
                                    </div>
                                    <span>
                                    <?= _e( 'Diffusivité', 'winatlab' ) ?>
                                </span>
                                </div>
                                <!-- End Box -->
                            </li>
                        </ul>
                        <!-- End List -->

                        <!-- Text -->
                        <div class="flexible_modife_water__left__text">
                            <?= $field['left_text'] ?>
                        </div>
                        <!-- End Text -->

                        <!-- Footer -->
                        <div class="flexible_modife_water__left__footer">
                            <?= _e( 'Extraction rapide', 'winatlab' ) ?>
                        </div>
                        <!-- End Footer -->

                    </div>
                    <!-- end container -->

                </div>
                <!-- End Left -->

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-xs-12 col-sm-12 col-md-6">

                <!-- Right -->
                <div class="flexible_modife_water__right">

                    <?php if( ! empty($field['right_title']) ) : ?>
                        <!-- Title -->
                        <h2 class="flexible_modife_water__right__title">

                            <img
                                    src="<?= get_template_directory_uri() . '/assets/images/modife_water_right_title_icon.svg' ?>"
                                    alt="<?= $field['right_title'] ?>"
                                    title="<?= $field['right_title'] ?>"
                            >
                            <div>
                                <?= $field['right_title'] ?>
                            </div>

                        </h2>
                        <!-- End Title -->
                    <?php endif; ?>

                    <?php if( ! empty($field['right_text']) ) : ?>
                        <!-- Text -->
                        <div class="flexible_modife_water__right__text">
                            <?= $field['right_text'] ?>
                        </div>
                        <!-- End Text -->
                    <?php endif; ?>

                </div>
                <!-- End Right -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->