<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['user_name','reservation_date','reservation_time','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
