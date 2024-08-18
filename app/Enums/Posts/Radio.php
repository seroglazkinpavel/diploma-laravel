<?php

namespace App\Enums\Posts;

class Radio
{
    const ONE = 'Да, все было понятно и хватило';
    const TWO = 'Было много полезного, но хотелось бы больше';
    const THREE = 'Было недостаточно';
    const FOUR = 'Я ничего не понял';

    public static function getRadio(): array
    {
        return [
            self::ONE,
            self::TWO,
            self::THREE,
            self::FOUR,
        ];
    }
}
