<?php require( 'includes/header.php' ); ?>

<style>
    html {
        width: 100% !important;
    }
</style>

<div class="l-login d-flex justify-content-center align-items-center">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10">

                <h3 class="text-center">
                    Login
                </h3>

                <form method="POST" action="/">

                    <div class="row">

                        <div class="col-12 my-2">
                            <input 
                            class="w-100 border rounded d-block py-2 px-3"
                            type="text"
                            name="username"
                            placeholder="Username:">
                        </div>

                        <div class="col-12 my-2">
                            <input 
                            class="w-100 border rounded d-block py-2 px-3"
                            type="password"
                            name="password"
                            placeholder="Password:">
                        </div>

                        <div class="col-12">
                            <input 
                            class="w-100 border rounded d-block py-2"
                            type="submit"
                            value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) :
        $username = $_POST[ 'username' ];
        $password = $_POST[ 'password' ]; 

        if( $username == 'leandrowoa' && $password == '87654321' ) :
            header( 'Location: ' . $url . '/raffle.php' );
        else : 
            header( 'Location: ' . $url);
        endif;
    endif;  
?>

<?php require( 'includes/footer.php' ); ?>