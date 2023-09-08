<?php

$user = base64_encode($_GET['user']);
$passwd = base64_encode($_GET['passwd']);

if ((base64_decode($user) == "raimundo.marques") && (base64_decode($passwd) == 123456)) {

    //echo "Chegou no IF";
    header("location: http://localhost/tela-login/home/?user=" . $user . "&passwd=" . $passwd);

} else {

    header("location: http://localhost/tela-login/");

}
