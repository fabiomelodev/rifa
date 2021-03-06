<?php require( 'includes/header.php' ); ?>

    <div class="l-overlay js-overlay"></div>

    <!-- menu -->
    <?php require( 'templates/content-menu.php' ); ?>
    <!-- end menu -->

    <!-- fill values -->
    <?php require( 'templates/fill-values.php' ); ?>
    <!-- end fill values -->

    <!-- notification -->
    <?php require( 'templates/content-notification.php' ); ?>
    <!-- end notification -->

    <div class="l-block d-flex justify-content-center align-items-center js-block">
        <span class="l-block__icon"></span>
    </div>

    <section class="l-raffle w-100 d-flex flex-column">

        <div class="w-100 d-flex justify-content-center align-items-center">
            <img 
            class="img-fluid"
            src="assets/images/image-top.png"
            alt="Imagem topo">
        </div>

        <div>
            <p class="l-raffle__title u-font-weight-bold text-center u-font-family-garamond text-uppercase u-color-folk-primary">
                rifa casamento
            </p>
        </div>

        <div class="l-raffle__box mx-auto">

            <div class="row justify-content-center">

                <?php for( $i = 1; $i <= 150; $i++ ) { ?>
                    <div 
                    class="l-raffle__item position-relative d-flex justify-content-center align-items-center u-font-weight-bold u-font-family-montserrat u-color-folk-primary u-cursor-pointer js-item"
                    data-value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div>
            <p class="u-font-weight-regular u-font-family-garamond text-center text-uppercase u-color-folk-primary mt-3 mb-0">
                valor r$ 15,00
            </p>

            <p class="u-font-size-25 u-font-weight-bold u-font-family-garamond text-center text-uppercase u-color-folk-primary mt-3 mb-0">
                pix (11) 99997-5915
            </p>

            <p class="u-font-weight-regular text-center u-font-family-garamond text-uppercase u-color-folk-primary mt-3 mb-0">
                o pr??mio ser??
            </p>

            <p class="u-font-size-36 u-font-weight-bold u-font-family-garamond text-center text-uppercase u-color-folk-primary mb-0">
                r$200,00
            </p>

            <p class="u-font-size-14 u-font-weight-regular u-font-family-garamond text-center text-uppercase u-color-folk-primary mt-3">
                sorteado ap??s todos os <br>
                n??meros serem vendidos
            </p>
        </div>
    </section>

<?php require( 'includes/footer.php' ); ?>