<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    public function staffs()
    {
        return $this->belongsTo(Staffs::class);
    }

    protected $fillable = [
        'image',
        'ter_id',
    ];
}
