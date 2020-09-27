<?php

require 'vendor/autoload.php';

use Nesk\Puphpeteer\Puppeteer;

$puppeteer = new Puppeteer;
$browser = $puppeteer->launch();
$page = $browser->newPage();

// Add your PuPHPeteer script here
$image = $page->goto('https://bringyourownideas.com/images/byoi-logo.jpg');
$base64 = $image->buffer()->toString('base64');
file_put_contents('./byoi-logo.jpg', base64_decode($base64));




$browser->close();
