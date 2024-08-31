<?php


namespace App\Services;


use App\Services\Contracts\Upload;
use Illuminate\Http\UploadedFile;

class UploadService implements Upload
{

    public function create(UploadedFile $file): string
    {
//        // файл пользователя расширение и имя
//        $extension = $file->getClientOriginalExtension();
//        $file =  $file->getClientOriginalName();
        $path = $file->storeAs('avatars', $file->hashName(), 'public');
        if ($path === false) {
            throw new \Exception('File was not upload');
        }
        return $path;
    }
}
