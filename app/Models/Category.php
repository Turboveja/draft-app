<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    /**
     * @param $query
     * @param $filter
     * @return void
     */
    public function scopeFilterByText($query, $filter = null)
    {
        if ($filter) {
            $query->where(function ($f) use ($filter) {
                $f->where('name', 'LIKE', "%$filter%");
//                $f->orWhere('description', 'LIKE', "%$filter%");
            });
        }
    }

    //Relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        return $this->morphMany(Imageable::class, 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'categories_products')->withTimestamps();
    }
}
