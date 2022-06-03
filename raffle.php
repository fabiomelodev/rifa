<?php require( 'includes/header.php' ); ?>

    <div class="l-overlay js-overlay"></div>

    <div class="l-setting d-flex justify-content-center align-items-center js-setting">
        <i class="fa-solid fa-gear u-font-size-36 u-color-folk-white"></i>
    </div>

    <div class="l-block d-flex justify-content-center align-items-center js-block">
        <span class="l-block__icon"></span>
    </div>

    <div class="l-form d-flex flex-column align-items-center js-box-form js-menus">

        <span class="l-widget__close js-close">
            <i class="fa-solid fa-circle-xmark u-font-size-36 u-color-folk-white"></i>
        </span>

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-10">

                    <div class="row">

                        <div class="col-12">
                            <input
                            class="w-100 border-0 rounded d-block py-2 js-field" 
                            type="text">
                        </div>

                        <div class="col-12 mt-3">
                            <input 
                            class="w-100 border-0 rounded u-font-weight-bold u-color-folk-primary bg-white py-2 js-submit" 
                            type="submit"
                            value="Submit">   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l-widget d-flex flex-column align-items-center js-widget js-menus">

        <span class="l-widget__close js-close">
            <i class="fa-solid fa-circle-xmark u-font-size-36 u-color-folk-white"></i>
        </span>

        <h5 class="l-widget__title u-font-weight-bold text-center text-uppercase u-color-folk-white mb-5 pb-5">
            Setting
        </h5>

        <ul>
            <li class="l-widget__item u-font-weight-semibold text-center text-capitalize u-font-size-36 u-color-folk-white my-3 js-screenshot">
                screenshot
            </li>

            <li class="l-widget__item u-font-weight-semibold text-center text-capitalize u-font-size-36 u-color-folk-white my-3 js-fill-values">
                fill values
            </li>
        </ul>
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
                o prêmio será
            </p>

            <p class="u-font-size-36 u-font-weight-bold u-font-family-garamond text-center text-uppercase u-color-folk-primary mb-0">
                r$200,00
            </p>

            <p class="u-font-size-14 u-font-weight-regular u-font-family-garamond text-center text-uppercase u-color-folk-primary mt-3">
                sorteado após todos os <br>
                números serem vendidos
            </p>
        </div>
    </section>

<?php require( 'includes/footer.php' ); ?>