<?php
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>
<!-- Section -->
<section class="flexible_button">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12">

                <!-- Inner -->
                <div class="flexible_button__inner">
                    <a href="<?= $field['url'] ?>" class="btn">
                        <?= $field['title'] ?>
                    </a>
                </div>
                <!-- End Inner -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Section -->