<?php

require 'vendor/autoload.php';

use Mohamadalsalty\Jsonfile\File;

$data = ['name' => 'mohamad'];
$data = json_encode($data);


//initiate
$readFile = new File('data', 'test.json');

//create the file
$readFile->create($data);

//read the file
echo($readFile->read());