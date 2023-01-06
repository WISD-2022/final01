<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Staffs;

class Schedule extends Model
{
    use HasFactory;

    public function  staffs(){
        return $this->belongsTo(Staffs::class);
    }
    protected $fillable = [
        'id',
        'ter_id',
        'week',
        'str_time',
        'end_time',
    ];

}
