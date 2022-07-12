<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExternalUrl extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function externalUrlType()
    {
        return $this->hasOne(ExternalUrlType::class, 'id', 'external_url_type_id');
    }
}
