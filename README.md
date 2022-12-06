<h1 align="center">
📄<br>JsonFile
</h1>

## <center>PHP library to deal with json files</center><br><br>


## ☕ Feel free to contribute !!
## Simple usage

````
composer require alsalty/jsonfile
````

```php
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

//delete the file
$file->delete();
```