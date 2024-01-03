<?php

namespace App\Casts;

use App\Enums\AdminSubstatus;
use App\Enums\UserSubstatus;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class SubstatusCast implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return UserSubstatus::tryFrom($value) ??
            AdminSubstatus::from($value);
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value instanceof UnitEnum ? $value->value : $value;
    }
}
