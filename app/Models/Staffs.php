<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    protected $fillable = [
        'id',
        'staff_name',
        'introduce',
    ];
}
