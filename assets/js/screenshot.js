(function() {
    const menuIcon = document.querySelector( '.js-menu-icon' )
    const menu = document.querySelector( '.js-menu' )
    const boxForm = document.querySelector( '.js-box-form' )
    const close = document.getElementsByClassName( 'js-close' )
    const submit = document.querySelector( '.js-submit' )
    const fillValues = document.querySelector( '.js-fill-values' )
    const salesHistoric = document.querySelector( '.js-sales-historic' )
    const clearRaffle = document.querySelector( '.js-clear-raffle' )
    const raffleQuantitySold = document.querySelector( '.js-raffle-quantities-sold' )
    const screenshort = document.querySelector( '.js-screenshot' )
    const block = document.querySelector( '.js-block' )
    const overlay = document.querySelector( '.js-overlay' ) 

    showRaffleSold()

    menuIcon.addEventListener( 'click', function() {
        menu.classList.add( 'is-show' )
    })

    screenshort.addEventListener( 'click', function() {
        disableTabs()
        hiddenItems()

        setTimeout(function() {
            capture()
        }, 1000)        
    })

    fillValues.addEventListener( 'click', function() {
        disableTabs()
        boxForm.classList.add( 'is-show' )
    })

    submit.addEventListener( 'click', function() {
        setNumbers()
    })

    salesHistoric.addEventListener( 'click', function() {
        showSalesHistoric()
    })

    clearRaffle.addEventListener( 'click', function() {
        clearAllRaffle()
    })

    block.addEventListener( 'click', function() {
        this.classList.toggle( 'is-active' )
        overlay.classList.toggle( 'is-active' )
    })

    for( const i of close ) {
        i.addEventListener( 'click', function() {
            disableTabs()
        })
    }

    function capture() {
        const captureElement = document.querySelector( 'body' )

        html2canvas(captureElement)
            .then(canvas => {
                canvas.style.display = 'none'
                document.body.appendChild(canvas)
                return canvas
            })
            .then(canvas => {
                const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream')
                const a = document.createElement('a')
                a.setAttribute('download', 'my-image.png')
                a.setAttribute('href', image)
                a.click()
                canvas.remove()
            })
    }

    function clearAllRaffle() {
        localStorage.setItem( 'numbers', '0' )

        disableTabs()
        showNotification( 'Rifa apagado!', 5000, 'reload' )
    }

    function disableTabs() {
        const tabs = document.getElementsByClassName( 'js-tab' )

        for( const i of tabs ) {
            i.classList.remove( 'is-show' )
        }
    }

    function hiddenItems() {
        menuIcon.classList.add( 'is-disabled' )
        block.classList.add( 'is-disabled' )

        setTimeout(function() {
            menuIcon.classList.remove( 'is-disabled' )
            block.classList.remove( 'is-disabled' )
        }, 3000)
    }   

    function setNumbers() {
        const field = document.querySelector( '.js-field' )
        const items = document.getElementsByClassName( 'js-item' )

        numbersCurrent = field.value.split(",")

        for( const i of numbersCurrent ) {
            for( const j of items ) {
                if( i == j.dataset.value ) {
                    j.click()
                }
            }
        }

        disableTabs()
        showNotification( 'Valores preenchidos' )
    }

    function showErrandValues( count ) {
        const errandValues = document.querySelector( '.js-errand-values' )

        errandValues.innerText = `R$ ${count * 15},00`
    }

    function showRaffleSold() {
        setTimeout(function() {
            const items = document.getElementsByClassName( 'js-item' )
            let count = 0
    
            for( const i of items ) {
                if( i.classList.contains( 'is-active' ) )
                    count++                
            }
    
            raffleQuantitySold.innerText = count
            showErrandValues( count )
            showRemainingRaffles( count )
        }, 3000)
    }

    function showRemainingRaffles( count ) {
        const item = document.querySelector( '.js-remaining-raffles' )

        if( 150 != count ) 
            item.innerText = 150 - count
    }

    function showSalesHistoric() {
        if( localStorage.getItem( 'numbers' ) ) {
            let values = localStorage.getItem( 'numbers' )

            disableTabs()
            showNotification( values, 10000)
        } else {
            disableTabs()
            showNotification( 'Nenhum valor encontrado!', 10000)
        }
    }

    function showNotification( text, duration, type ) {
        const notification = document.querySelector( '.js-notification' )

        if( !duration )
            duration = 5000

        notification.classList.add( 'is-show' )
        notification.innerText = text

        setTimeout(function() {
            notification.classList.remove( 'is-show' )
        }, duration)

        if( type == 'reload' )
            location.reload()
    }
})()