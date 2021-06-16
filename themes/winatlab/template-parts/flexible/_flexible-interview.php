<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Section -->
<section class="flexible_interview margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <!-- Header -->
                <div class="flexible_interview__header">

                    <?php if( ! empty( $field['title_image'] ) ) : ?>
                        <!-- Image -->
                        <div class="flexible_interview-title_image">
                            <?= kama_thumb_img('w=106 &h=106 &attach_id=' . $field['title_image']) ?>
                        </div>
                        <!-- End Image -->
                    <?php endif; ?>

                    <?php if( ! empty( $field['title'] ) ) : ?>
                        <!-- Title -->
                        <h2 class="flexible_interview-title">
                            <?= $field['title'] ?>
                        </h2>
                        <!-- End Title -->
                    <?php endif; ?>

                    <?php if( ! empty( $field['text'] ) ) : ?>
                        <!-- Title -->
                        <div class="flexible_interview-text">
                            <?= $field['text'] ?>
                        </div>
                        <!-- End Title -->
                    <?php endif; ?>

                </div>
                <!-- End Header -->

                <?php if( ! empty( $field['list'] ) ) : ?>
                    <!-- List -->
                    <div class="flexible_interview__list">

                        <?php foreach ( $field['list'] as $item ) : ?>

                            <!-- row -->
                            <div class="flexible_interview__list__row">

                                <!-- title -->
                                <div class="title">
                                    <?= $item['title'] ?>
                                </div>
                                <!-- end title -->

                                <!-- text -->
                                <div class="text">
                                    <?= $item['text'] ?>
                                </div>
                                <!-- end text -->

                            </div>
                            <!-- end row -->

                        <?php endforeach; ?>

                    </div>
                    <!-- End List -->
                <?php endif; ?>

                <?php if( ! empty( $field['button'] ) ) : ?>
                    <!-- Button -->
                    <div class="flexible_interview__footer">

                        <a href="<?= languageUrl($field['button']['url']) ?>" class="btn">
                            <?= $field['button_title'] ?>
                        </a>

                    </div>
                    <!-- End Button -->
                <?php endif; ?>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->