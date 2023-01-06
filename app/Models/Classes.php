<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function reserve(){
        return $this->hasMany(Reserve::class);
    }

    protected $fillable = [
        'id',
        'class_name',
        'intro',
        'amount',
        'time',
    ];
}
