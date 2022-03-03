<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Imageable extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $appends = ['full_path'];

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

    //Relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    //Mutators/Accesors

    /**
     * @return string
     */
    public function getFullPathAttribute()
    {
        return sprintf('%s%s', env('APP_URL'), Storage::url($this->path));
    }
}
