<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class SlugService
{
    /**
     * Generate a unique slug for a given model.
     *
     * @param string $name
     * @param Model $model
     * @return string
     */
    public function createUniqueSlug(string $name, Model $model): string
    {
        $baseSlug = Str::slug($name);
        $uniqueSlug = $baseSlug;
        $counter = 1;

        while ($model::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
