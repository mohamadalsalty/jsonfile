<?php

require 'vendor/autoload.php';

use Mohamadalsalty\Jsonfile\File;

$data = ['name' => 'mohamad'];
$data = json_encode($data);


//initiate
$file = new File('data', 'test.json');

//create the file
$file->create($data);

//read the file
echo($file->read());