<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ArtisanExecutionTestController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function sandbox()
    {
//        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_media_table', '--create' => 'media']);
//        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_mediable_table', '--create' => 'mediable']);

        //Hard command executions

        #region First pack
        $first_pack_executed = true;

        //Migrations
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_album_types_albums_table', '--create' => 'album_types_albums']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_album_genres_table', '--create' => 'album_genres']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_copyrights_table', '--create' => 'copyrights']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_album_copyrights_table', '--create' => 'album_copyrights']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_external_url_types_table', '--create' => 'external_url_types']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_external_urls_table', '--create' => 'external_urls']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_album_external_urls_table', '--create' => 'album_external_urls']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_tracks_table', '--create' => 'tracks']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_track_external_urls_table', '--create' => 'track_external_urls']);
        $artisan_exec = Artisan::call('make:migration', ['name' => 'create_track_genres_table', '--create' => 'track_genres']);

        $first_pack_entities = [
            'AlbumType',
            'Artist',
            'Genre',
            'Album',
            'AlbumType',
            'Copyright',
            'ExternalUrlType',
            'Track',
        ];

        if(!$first_pack_executed){
            //Controller, Model, Request, Resource
            foreach ($first_pack_entities as $entity) {
                Artisan::call("make:model {$entity}");
                Artisan::call("make:controller Api/{$entity}Controller --resource --api");
                Artisan::call("make:request Api/{$entity}Request");
                Artisan::call("make:resource {$entity}Resource");
            }
        }
        #endregion

        return response()->json();
    }
}
