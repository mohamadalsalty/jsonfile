<?php

namespace Alsalty\Jsonfile;

class Convert
{

    static function convertToJson($data): string
    {
        if (is_array($data)) {
            return json_encode($data);
        } else {
            return $data;
        }
    }

}