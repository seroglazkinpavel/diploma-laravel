<?php


namespace App\Services\Contracts;


use Illuminate\Http\UploadedFile;

interface ContractCategory
{
    public function create(UploadedFile $file): string; // возвращать ссылку на этот файл
}
