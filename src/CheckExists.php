<?php

namespace Alsalty\Jsonfile;

/**
 * Class for dealing with files and folders checking
 */
class CheckExists
{
    /**
     * @param $folderPath
     * @return bool
     */
    static function folderExists($folderPath): bool
    {
        if (is_dir($folderPath)) return true;
        return false;
    }

    /**
     * @param $filePath
     * @return bool
     */
    static function fileExists($filePath): bool
    {
        if (file_exists($filePath)) return true;
        return false;
    }

}