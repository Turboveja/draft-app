<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'name', 'origin_country', 'contact', 'web_slug', 'formed_in'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function medias()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function albums()
    {
        return $this->hasMany(Album::class, 'artist_id', 'id');
    }

    /**
     * @return null
     */
    public function getProfileMediaPath()
    {
        return count($this->medias) ? $this->medias->first()->path : null;
    }
}
