<?php

require 'vendor/autoload.php';

use Alsalty\Jsonfile\File;
use Alsalty\Jsonfile\Convert;
$data = ['name' => 'mohamad'];


// convert array to json
$data = Convert::convertToJson($data);


//initiate
$file = new File('data', 'test.json');

//create the file
$file->create($data);

//read the file
echo($file->read());

//delete file
$file->delete();