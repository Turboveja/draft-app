<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['nullable', 'string'],
            'artist_uuid' => ['required', 'exists:artists,uuid'],
            'album_type_uuid' => ['required', 'exists:album_types,uuid'],
            'release_date' => ['nullable', 'date'],

            'genres_uuids' => ['required', 'array'],
            'genres_uuids.*' => ['exists:genres,uuid'],

            'external_urls_uuids' => ['nullable', 'array'],
            'external_urls_uuids.*.uuid' => ['exists:external_urls,uuid'],
            'external_urls_uuids.*.name' => ['required', 'string'],
            'external_urls_uuids.*.url' => ['required', 'url'],
            'external_urls_uuids.*.external_url_type_uuid' => ['exists:external_url_types,uuid'],

        ];
    }
}
