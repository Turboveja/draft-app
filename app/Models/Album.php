<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'name', 'artist_id', 'album_type_id', 'release_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function medias()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artist()
    {
        return $this->hasOne(Artist::class, 'id', 'artist_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'album_genres', 'album_id', 'genre_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function externalUrls()
    {
        return $this->belongsToMany(ExternalUrl::class, 'album_external_urls', 'album_id', 'external_url_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tracks()
    {
        return $this->hasMany(Track::class, 'artist_id', 'id');
    }
}
