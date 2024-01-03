<?php

namespace App\Enums;

enum UserStatus: string
{
    case User = 'User';
    case Admin = 'Admin';

    /** return possible substatuses of each case */
    public static function substatuses(self|string|null $status): array
    {
        if (is_string($status) && $status != '') $status = self::from($status);

        return static::makeArray(match ($status) {
            self::Admin => AdminSubstatus::cases(),
            default => UserSubstatus::cases(),
        });
    }

    /** helper function to provide an array for filament select options */
    public static function makeArray(array $enums): array
    {
        $enums = array_map(fn ($case) => $case->value, $enums);
        return array_combine($enums, $enums);
    }
}
