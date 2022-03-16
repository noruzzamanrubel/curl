<?php

$ch = curl_init( 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSdAhyH9lknM--ielEt7lHDYObpZU4OJ3ptgGLm2XQbaY0QEJA/formResponse' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_POSTFIELDS, 'entry.2005620554=Rubel+Ahmed&entry.1045781291=rubel@gmail.com&entry.1166974658=01737779430' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec( $ch );

if ( curl_error( $ch ) ) {
    echo curl_error( $ch );
} else {
    echo $result;
}
