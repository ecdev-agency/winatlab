<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( ! $args['column'] ) : ?>
<!-- Section -->
<section class="flexible_video margin__bottom-<?= $field['margin_bottom'] ?> <?= $field['class'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">
<?php endif; ?>

    <!-- Content -->
    <div class="flexible_video-content">

        <?php if( !empty( $field['title_image'] ) ) : ?>
            <!-- Image -->
            <div class="flexible_video-content--image">
                <?= kama_thumb_img( 'w=120 &h=120 &attach_id=' . $field['title_image'] ) ?>
            </div>
            <!-- End Image -->
        <?php endif; ?>

        <?php if( !empty( $field['title'] ) ) : ?>
            <!-- Title -->
            <h2 class="flexible_video-content--title">
                <?= $field['title'] ?>
            </h2>
            <!-- End Title -->
        <?php endif; ?>

        <?php if( !empty( $field['title_text'] ) ) : ?>
            <!-- Text -->
            <div class="flexible_video-content--title_text">
                <?= $field['title_text'] ?>
            </div>
            <!-- End Text -->
        <?php endif; ?>

        <!-- Video -->
        <div class="flexible_video-content--video videoPsevdoLink" data-video="<?= $field['url'] ?>" <?= (!empty($field['maxwidth'])) ? 'style="margin-left:auto;margin-right:auto;max-width:'.$field['maxwidth'].'px"' : '' ?>>
            <figure class="play"></figure>
            <img
                    src="<?= $field['poster'] ?>"
                    alt="<?= get_bloginfo('name') ?>"
                    title="<?= get_bloginfo('name') ?>"
            >
        </div>
        <!-- End Video -->

        <?php if( ! empty( $field['text_after'] ) ) : ?>
            <!-- Footer -->
            <div class="flexible_video-content--footer">

                <?= $field['text_after'] ?>

            </div>
            <!-- End Footer -->
        <?php endif; ?>

        <?php if( ! empty( $field['button'] ) ) : ?>
            <!-- Button -->
            <div class="flexible_video-content--button">

                <a href="<?= $field['button']['url'] ?>" class="btn">
                    <?= $field['button_title'] ?>
                </a>

            </div>
            <!-- End Button -->
        <?php endif; ?>

    </div>
    <!-- Content -->

<?php if( ! $args['column'] ) : ?>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->
<?php endif; ?>