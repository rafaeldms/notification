<?php

require __DIR__ . "/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email(
    2,
    "br190.hostgator.com.br",
    "rafael@cagep.com.br",
    'r13d02f1986',
    'tsl',
    '587',
    'rafael@cagep.com.br',
    "Rafael D. Ferreira"
);

$novoEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de teste com PHPMailer</p>",
    "rafael@cagep.com.br",
    "Rafael D. F.",
    "mds_rafinha@hotmail.com",
    "Rafael Damasceno"
);

var_dump($novoEmail);