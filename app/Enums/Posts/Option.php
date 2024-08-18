<?php

namespace App\Enums\Posts;

class Option
{
    const GREAT = 'Отлично';
    const GOOD = 'Хорошо';
    const WEAKLY = 'Слабо';
    const BAD = 'Очень плохо';

    public static function getOptions(): array
    {
        return [
            self::GREAT,
            self::GOOD,
            self::WEAKLY,
            self::BAD,
        ];
    }
}
