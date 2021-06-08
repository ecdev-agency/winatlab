<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<!-- Sheme Page Form -->
<section class="flexible_newsletter <?= $field['class'] ?>">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Title -->
                <h2 class="sheme_page__form-title">
                    <?= $field['title'] ?>
                </h2>
                <!-- End Title -->

                <!-- Form 377 -->
                <div class="sheme_page__form-form">
                    <?= do_shortcode( '[contact-form-7 id="' . $field['form'] . '" title="Inscrivez-vous à Notre newsletter (Sheme Page)" html_class=""]' ) ?>
                </div>
                <!-- End Form -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Sheme Page Form -->