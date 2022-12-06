<?php

namespace Alsalty\Jsonfile;

use Alsalty\Jsonfile\CheckExists;

/**
 * File to read and create files
 */
class File
{
    /**
     * @var string the full folder path
     */
    private string $folderPath;


    /**
     * @var string the full path of the file with its name
     */
    private string $filePath;


    /**
     * @param string $folderPath the full folder path
     * @param string $fileName the file name we would like to use
     */
    public function __construct(string $folderPath, string $fileName)
    {
        $this->filePath = $folderPath . '/' . $fileName;
        if (CheckExists::folderExists($folderPath))
            $this->folderPath = $folderPath;
        else mkdir($folderPath);
    }


    /**
     * @param string $fileData the data we need to create the file
     * @return bool
     */
    public function create(string $fileData): bool
    {
        if (CheckExists::fileExists($this->filePath)) return false;
        try {
            $file = fopen($this->filePath, 'w');
            fwrite($file, $fileData);
            return true;
        } catch (Exception $e) {
            return false;
        }

    }


    /**
     * @return false|string
     */
    public function read(): bool|string
    {
        if (!CheckExists::fileExists($this->filePath)) return false;
        try {
            return file_get_contents($this->filePath);
        } catch (Exception $e) {
            return false;
        }

    }


    /**
     * @return bool
     */
    public function delete(): bool
    {
        if (!CheckExists::fileExists($this->filePath)) return false;
        try {
            unlink($this->filePath);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}