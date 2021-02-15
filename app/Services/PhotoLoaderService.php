<?php


namespace App\Services;


use Illuminate\Http\UploadedFile;

class PhotoLoaderService
{
    /**
     * Save photo and return the path
     * @param UploadedFile $file
     * @return string
     */
    public static function loadPhoto(UploadedFile $file): string
    {
        return $file->storeAs('/', $file->getBasename(), ['disk' => 'uploads']);
    }
}
