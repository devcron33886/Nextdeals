<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class RandomScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('created_at', '>', now()->subDays(15));
    }
}
