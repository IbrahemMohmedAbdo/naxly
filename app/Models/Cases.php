<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'title',

    ];
    
    public function media()
    {
        return $this->morphOne(Media::class, 'mediaable');
    }
}
