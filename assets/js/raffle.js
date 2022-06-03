(function() {
    const submit = document.querySelector( '.js-submit' )

    submit.addEventListener( 'click', function() {
        setNumbers()
    })

    function createLocalStorage() {
        let initialValue = ["0", "1"]
        localStorage.setItem( 'numbers', initialValue )
        addValues()
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
    }

    function addValues() {
        const numbers = localStorage.getItem( 'numbers' ) // [1, 15, 23, 30]
        const numbersCurrent = numbers.split(",") // ["1", "15", "23", "30"]
    
        return numbersCurrent
    }
    
    if( !localStorage.getItem( 'numbers' ) ) {
        createLocalStorage()
    } else {
        const items = document.getElementsByClassName( 'js-item' )
        const selectedItems = []
        let updatedValues = []
        let numbersCurrent = addValues()
        items[60].classList.add( 'is-active' )
    
        for(const i of items ) {
            for( const j of numbersCurrent ) {
                if( i.dataset.value == j ) {
                    selectedItems.push(i)
                } else {
                    i.classList.remove( 'is-active' )
                }
            }
        }
    
        for( const k of selectedItems ) 
            k.classList.add( 'is-active' )
    
        for( const l of items ) {
            l.addEventListener( 'click', function() {
                if( this.classList.contains( 'is-active' ) ) {
                    this.classList.remove( 'is-active' )
                    let index = numbersCurrent.indexOf(this.dataset.value)
    
                    if( index > -1 ) {
                        numbersCurrent.splice(index, 1)
                        localStorage.setItem( 'numbers', numbersCurrent)
                    }
                } else {
                    this.classList.add( 'is-active' )
                    numbersCurrent.push(this.dataset.value)
                    localStorage.setItem( 'numbers', numbersCurrent)
                }
            })
        }  
    }     
})()