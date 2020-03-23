<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,
        'mail.ingraphics.com.br',
        'webmaster@ingraphics.com.br',
        'gfgftrfrfrfdsds',
        'tls',
        '587',
        'valdir@ingraphics.com.br',
        'Webmaster Ingraphics');

$novoEmail->sendMail("Assunto de Teste",
        "<p>Este é um e-mail de <b>teste</b></p>",
        "valdir@ingraphics.com.br",
        "Valdir Kastickas Junior",
        "webmaster@ingraphics.com.br",
        "Webmaster Ingraphics");

var_dump($novoEmail);

