<?php

require 'vendor/autoload.php';

use Nesk\Puphpeteer\Puppeteer;

$puppeteer = new Puppeteer;
$browser = $puppeteer->launch();
$page = $browser->newPage();

// Add your PuPHPeteer script here




$browser->close();
