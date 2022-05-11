<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class TrackRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'number' => ['required', 'string'],
            'explicit' => ['required', 'boolean'],

            'artist_uuid' => ['required', 'exists:artists,uuid'],

            'album_uuids' => ['required', 'array'],
            'album_uuids.*' => ['exists:albums,uuid'],

            'genres_uuids' => ['required', 'array'],
            'genres_uuids.*' => ['exists:genres,uuid'],

            'external_uuids' => ['nullable', 'array'],
            'external_uuids.*.uuid' => ['exists:external_urls,uuid'],
            'external_uuids.*.name' => ['required', 'string'],
            'external_uuids.*.url' => ['required', 'url'],
            'external_uuids.*.external_url_type_uuid' => ['exists:external_url_types,uuid'],
        ];
    }
}
