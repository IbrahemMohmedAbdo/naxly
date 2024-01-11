<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediaable_type',
        'mediaable_id',
        'filename',
        'filetype',
        'type',
        'createby_id',
        'createby_type',
        'updateby_id',
        'updateby_type',
    ];

    public function mediaable()
    {
        return $this->morphTo();
    }
}
