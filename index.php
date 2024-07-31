<?php

require __DIR__ . '/vendor/autoload.php';

//chamando a classe definida
use \App\Controller\Pages\Home;

//chamando o método da classe
echo Home::getHome();