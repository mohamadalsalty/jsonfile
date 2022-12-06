<?php

require 'vendor/autoload.php';

use Alsalty\Jsonfile\File;

$data = ['name' => 'mohamad'];
$data = json_encode($data);


//initiate
$file = new File('data', 'test.json');

//create the file
$file->create($data);

//read the file
echo($file->read());

//delete file
$file->delete();