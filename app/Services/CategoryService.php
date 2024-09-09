<?php


namespace App\Services;


use App\Services\Contracts\ContractCategory;
use Illuminate\Http\UploadedFile;

class CategoryService implements ContractCategory
{

    public function create(UploadedFile $file): string
    {
        $path = $file->storeAs('categories', $file->hashName(), 'public');
        if ($path === false) {
            throw new \Exception('File was not upload');
        }
        return $path;
    }
}
