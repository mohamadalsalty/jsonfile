<?php

namespace Alsalty\Jsonfile;

/**
 * Class to do some converts
 */
class Convert
{

    /**
     * @param $data
     * @return string
     */
    static function convertToJson($data): string
    {
        if (is_array($data)) {
            return json_encode($data);
        } else {
            return $data;
        }
    }

}