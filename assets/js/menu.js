(function() {
    const items = document.getElementsByClassName( 'js-menu-item' )

    for( const i of items ) {
        i.addEventListener( 'click', function() {
            for( const j of items ) 
                j.classList.remove( 'is-active' )
            
            if( this.classList.contains( 'l-menu__item__dropdown' ) ) {
                this.classList.add( 'is-active' )
            }
        })
    }
})()