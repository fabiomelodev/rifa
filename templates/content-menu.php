<div class="l-menu__box d-flex justify-content-center align-items-center js-menu-icon">
    <i class="fa-solid fa-bars u-font-size-36 u-color-folk-white"></i>
</div>

<div class="l-menu py-5 js-menu js-tab">

    <?php require( 'templates/content-close.php' ); ?>

    <h2 class="l-menu__title u-font-weight-regular text-uppercase text-center u-color-folk-white mb-5">
        menu
    </h2>

    <div>
        <ul>
            <li class="l-menu__item l-menu__item__dropdown js-menu-item">
                Gerenciamento

                <ul class="l-menu__dropdown pl-5">

                    <li class="l-menu__item js-screenshot">
                        capturar tela
                    </li>

                    <li class="l-menu__item js-fill-values">
                        preencher valores
                    </li>

                    <li class="l-menu__item js-sales-historic">
                        histórico de vendas
                    </li>
                </ul>
            </li>

            <li class="l-menu__item l-menu__item__dropdown js-menu-item">
                configurações

                <ul class="l-menu__dropdown pl-5">
                    <li class="l-menu__item js-clear-raffle">
                        limpar rifa
                    </li>
                </ul>
            </li>

            <li class="l-menu__item l-menu__item__dropdown js-menu-item">
                Informações da Rifa

                <ul class="l-menu__dropdown pl-5">
                
                    <li class="l-menu__item">
                        Valor recadado: <span class="js-errand-values">R$00,00</span>
                    </li>
            
                    <li class="l-menu__item">
                        Quantidade de rifas vendidas: <span class="js-raffle-quantities-sold">0</span>
                    </li>

                    <li class="l-menu__item">
                        Falta: <span class="js-remaining-raffles">000</span>
                    </li>
                </ul> 
            </li>
        </ul>
    </div>
</div>