<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;

$novoEmail->sendMail("Assunto de Teste",
        "<p>Este é um e-mail de <b>teste</b></p>",
        "valdir@ingraphics.com.br",
        "Valdir Kastickas Junior",
        "webmaster@ingraphics.com.br",
        "Webmaster Ingraphics");

var_dump($novoEmail);

