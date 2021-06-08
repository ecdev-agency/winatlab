<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Section -->
<section class="flexible_sheme_water margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <?php if( ! empty( $field['title'] ) ) : ?>

                    <h2 class="flexible_sheme_water-title">
                        <?= $field['title'] ?>
                    </h2>

                <?php endif; ?>

                <!-- List -->
                <div class="flexible_sheme_water-list">

                    <!-- List > Left -->
                    <div class="flexible_sheme_water-list-left">

                        <!-- Box -->
                        <div class="flexible_sheme_water-list-leftbox">

                            <!-- center -->
                            <div>
                                <span><?= $field['left_title'] ?></span>
                                <p><?= $field['left_text'] ?></p>
                            </div>
                            <!-- end center -->

                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End List > Left -->

                    <!-- List > Center -->
                    <div class="flexible_sheme_water-list-center">

                        <!-- Box -->
                        <div class="flexible_sheme_water-list-centerbox">

                            <!-- center -->

                                <div class="image">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/sheme_water_center_icon.svg' ?>" alt="" title="">
                                </div>
                                <div class="title">
                                    <?= $field['center_title'] ?>
                                </div>

                            <!-- end center -->

                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End List > Center -->

                    <!-- List > Right -->
                    <div class="flexible_sheme_water-list-right">

                        <!-- Box -->
                        <div class="flexible_sheme_water-list-rightbox">

                            <!-- center -->
                            <div>
                                <span><?= $field['right_title'] ?></span>
                                <p><?= $field['right_text'] ?></p>
                            </div>
                            <!-- end center -->

                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End List > Right -->

                </div>
                <!-- End List -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->