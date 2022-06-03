(function() {
    const setting = document.querySelector( '.js-setting' )
    const widget = document.querySelector( '.js-widget' )
    const close = document.querySelector( '.js-close' )
    const screenshort = document.querySelector( '.js-screenshot' )
    const fillValues = document.querySelector( '.js-fill-values' )
    const boxForm = document.querySelector( '.js-box-form' )

    setting.addEventListener( 'click', function() {
        widget.classList.add( 'is-active' )
    })

    fillValues.addEventListener( 'click', function() {
        boxForm.classList.add( 'is-active' )
    })

    close.addEventListener( 'click', function() {
        widget.classList.remove( 'is-active' )
        boxForm.classList.remove( 'is-active' )
    })

    screenshort.addEventListener( 'click', function() {
        widget.classList.remove( 'is-active' )

        setTimeout(function() {
            capture()
        }, 1000)

        hiddenSetting()
    })

    function hiddenSetting() {
        setting.classList.add( 'is-disabled' )

        setTimeout(function() {
            setting.classList.remove( 'is-disabled' )
        }, 3000)
    }

    function capture() {
        const captureElement = document.querySelector('body')

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
})()