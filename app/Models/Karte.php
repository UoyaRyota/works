<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karte extends Model
{
    use HasFactory;
    protected $fillable = ['karte_body'];

    public function clinical()
    {
        return $this->belongsTo('App\Models\Clinical');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
