<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['uuid', 'name'];

    //Scopes
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
            });
        }
    }
}
