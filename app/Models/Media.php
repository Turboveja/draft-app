<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medias';
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function artists()
    {
        return $this->morphedByMany(Artist::class, 'mediable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function albums()
    {
        return $this->morphedByMany(Album::class, 'mediable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tracks()
    {
        return $this->morphedByMany(Track::class, 'mediable');
    }
}
