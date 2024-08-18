<?php

namespace App\Enums\Posts;

class Status
{
    const DRAFT = 'draft';
    const ACTIVE = 'active';
    const BLOCKED = 'blocked';

    public static function getEnums(): array
    {
        return [
            self::DRAFT,
            self::ACTIVE,
            self::BLOCKED,
       ];
   }

}
