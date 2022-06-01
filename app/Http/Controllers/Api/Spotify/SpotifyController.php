<?php

namespace App\Http\Controllers\Api\Spotify;

use Spotify;
use App\Http\Controllers\Controller;
use App\Http\Services\SpotifyService;

class SpotifyController extends Controller
{
    /**
     * @var
     */
    private $spotify_service;

    /**
     * @param $spotify_service
     */
    public function __construct()
    {
        $this->spotify_service = new SpotifyService();
    }

    /**
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Aerni\Spotify\Exceptions\SpotifyApiException
     */
    public function importArtist(string $id)
    {
        \DB::beginTransaction();
        try {
            $artist = $this->spotify_service->importFullArtist($id);

            \Log::channel(LOG_CHANNEL_SPOTIFY)->info([
                'importArtist' => $id,
                'newArtist' => $artist->name
            ]);

            \DB::commit();
        } catch (\Exception $ex){
            \Log::channel(LOG_CHANNEL_SPOTIFY)->info([
                'importArtist' => $id,
                'exMessage' => $ex->getMessage()
            ]);

            \DB::rollback();
        }

        return response()->json($artist);
    }

    public function importAlbum(string $id)
    {

    }

    public function importAlbumTracks(string $album_id)
    {

    }
}
