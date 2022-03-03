<?php

namespace App\Http\Repositories;

use App\Models\Imageable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageRepository
{
    /**
     * Store image item and image file
     *
     * @param UploadedFile $file
     * @return mixed
     */
    public function store(UploadedFile $file, Model $model_morph)
    {
        //Image store
        $path = Storage::putFileAs('public/images', $file, $file->getClientOriginalName());

        //Link relation
        $row = $model_morph->images()->create(
            [
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]
        );

        return $row;
    }
}
