<h1 align="center">
📄<br>JsonFile
</h1>

## <center>PHP library to deal with json files</center><br><br>


## ☕ Feel free to contribute !!
## Simple usage
```
<?php
require 'vendor/autoload.php';

use Mohamadalsalty\Jsonfile\File;

$data = ['name' => 'mohamad'];
$data = json_encode($data);


//initiate data is the full path name of the folder
//test.json is the file name
$readFile = new File('data', 'test.json');

//create the file
//$data is the json variable
$readFile->create($data);

//read the file
echo($readFile->read());



/>

```