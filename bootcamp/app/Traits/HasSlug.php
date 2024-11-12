<?php

namespace App\Traits;

use function DI\string;

trait HasSlug
{
    //

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

//escucha evento de eloquent al crearse cosas en la tabla
    public static function bootHasSlug(): void
    {
        static::saving(function ($model){
            $model->slug =Str::slug($model->name);
        });
    }
}
