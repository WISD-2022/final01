<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    public function classes(){
        return $this->belongsTo(Classes::class);
    }
    public function staff(){
        return $this->belongsTo(Staff::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
