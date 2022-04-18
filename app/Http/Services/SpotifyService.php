<?php

namespace App\Http\Services;

use Spotify;

class SpotifyService
{
    /**
     * @param $artist_id
     * @return mixed
     */
    public function getArtist($artist_id)
    {
        return Spotify::artist($artist_id)->get();
   }

    /**
     * @param $album_id
     * @return mixed
     */
    public function getAlbum($album_id)
    {
        return Spotify::album($album_id)->get();
    }
}
