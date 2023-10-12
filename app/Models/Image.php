<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'image';
    protected $fillable = [
        'name',
        'path',
        'size',
    ];
    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
