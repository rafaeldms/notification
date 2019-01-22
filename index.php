<?php

require __DIR__ . "/lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email();
$novoEmail->sendMail("Assundo de Teste", "<p>Esse é um e-mail de teste com PHPMailer", "rafael@cagep.com.br", "Rafael D. F.", "mds_rafinha@hotmail.com", "Rafael Damasceno");

var_dump($novoEmail);