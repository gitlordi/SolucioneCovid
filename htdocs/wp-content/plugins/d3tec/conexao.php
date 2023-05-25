<?php

    define( 'DB_NAME', 'epiz_33861218_w854' );  

    /** Database username */
    define( 'DB_USER', '33861218_1' );

    /** Database password */
    define( 'DB_PASSWORD', '45]!KpIjS1' );

    /** Database hostname */
    define( 'DB_HOST', 'sql201.byetcluster.com' );

    /** Database charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8mb4' ); 

    $con =  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if($con->error){
            echo "error";
    }  

?>