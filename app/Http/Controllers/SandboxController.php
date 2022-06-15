<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SandboxController extends Controller
{
    public function addMorphTest(Request $request)
    {
        $artist = Artist::first();

        //Example 1:
        /*
        $media = new Media;
        $media->uuid = Str::uuid();
        $media->path = '/';
        $media->name = 'test';
        $artist->medias()->save($media);
        */

        //Example 2
        $artist->medias()->attach([
            Media::create([
                'uuid' => Str::uuid(),
                'path' => '/2',
                'name' => 'test',
            ])->id
        ]);


        dd($artist->medias);
    }
}
